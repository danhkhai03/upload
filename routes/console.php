<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Console\Scheduling\Schedule;
use App\Console\Commands\uploadimg;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use App\Console\Commands\DeleteExpiredImages;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

// Định nghĩa lịch trình cho lệnh xóa ảnh hết hạn
app(Schedule::class)->command('images:delete-expired')->everyMinute();
