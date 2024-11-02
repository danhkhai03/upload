<?php

namespace App\Services;

use App\Repositories\ImageRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ImageService
{
    protected $imageRepository;

    public function __construct(ImageRepositoryInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function uploadImages(array $files, $autoDelete, $sessionId)
    {
        $uploadedFiles = [];
        $errors = [];

        foreach ($files as $file) {
            // Kiểm tra kích thước file
            if ($file->getSize() > 32 * 1024 * 1024) {
                $errors[] = "File {$file->getClientOriginalName()} vượt quá kích thước tối đa cho phép.";
                continue; // Bỏ qua file nếu kích thước quá lớn
            }

            // Kiểm tra định dạng file
            if (!$file->isValid() || !in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif', 'svg', 'bmp', 'tif', 'webp', 'heic', 'avif', 'pdf', 'doc', 'docx', 'pptx', 'txt'])) {
                $errors[] = "File {$file->getClientOriginalName()} không hợp lệ.";
                continue; // Bỏ qua file không hợp lệ
            }

            // Xử lý file hợp lệ
            DB::beginTransaction(); // Bắt đầu transaction cho từng file

            try {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('uploads', $filename, 'public');

                $data = [
                    'filename' => $filename,
                    'path' => $path,
                    'session_id' => $sessionId, // Sử dụng session_id được truyền vào
                    'user_id' => Auth::id(),
                ];

                $this->imageRepository->create($data);

                $uploadedFiles[] = [
                    'filename' => $filename,
                    'path' => $path,
                    'url' => asset('storage/' . $path),
                ];

                DB::commit(); // Commit nếu lưu file thành công
            } catch (\Exception $e) {
                DB::rollBack(); // Rollback nếu có lỗi
                Log::error("Có lỗi khi tải lên file {$file->getClientOriginalName()}: " . $e->getMessage());
                $errors[] = "Có lỗi khi tải lên file {$file->getClientOriginalName()}: " . $e->getMessage();
            }
        }

        return [
            'success' => count($uploadedFiles) > 0,
            'images' => $uploadedFiles,
            'errors' => $errors,
            'message' => count($uploadedFiles) > 0 ? 'Tải lên thành công' : 'Không có file nào hợp lệ được tải lên',
        ];
    }

    public function getImagesBySessionId($sessionId)
    {
        return $this->imageRepository->findBySessionId($sessionId);
    }

    private function calculateDeleteAt($autoDelete)
    {
        if ($autoDelete == -1) {
            return null;
        }

        $now = Carbon::now();

        switch ($autoDelete) {
            case 0.33:
                return $now->addSeconds(20);
            case 0.0167:
                return $now->addMinute();
            case 1:
                return $now->addHour();
            case 24:
                return $now->addDay();
            case 168:
                return $now->addWeek();
            case 720:
                return $now->addMonth();
            default:
                return $now->addMinutes($autoDelete);
        }
    }
}