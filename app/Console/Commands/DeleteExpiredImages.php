<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Image;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class DeleteExpiredImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'images:delete-expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Xóa các ảnh đã hết hạn';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();
        $expiredImages = Image::where('delete_at', '<=', $now)->get();

        foreach ($expiredImages as $image) {
            // Xóa file ảnh khỏi storage
            Storage::disk('public')->delete($image->path);

            // Xóa bản ghi khỏi database
            $image->delete();

            Log::info('Đ�� xóa ảnh hết hạn: ' . $image->filename);
        }

        $this->info('Đã xóa tất cả các ảnh hết hạn.');
    }
}
