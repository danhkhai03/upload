<?php

namespace App\Services;

use App\Repositories\ImageRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ImageService
{
    protected $imageRepository;

    public function __construct(ImageRepositoryInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function uploadImages(array $files, $autoDelete)
    {
        $uploadedFiles = [];
        $sessionId = request()->cookie('user_session') ?? Str::uuid();
        Cookie::queue('user_session', $sessionId, 30 * 24 * 60); // Lưu cookie 30 ngày

        foreach ($files as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads', $filename, 'public');

            $data = [
                'filename' => $filename,
                'path' => $path,
                'session_id' => Auth::check() ? null : $sessionId,
                'user_id' => Auth::id(),
            ];

            $this->imageRepository->create($data);

            $uploadedFiles[] = [
                'filename' => $filename,
                'path' => $path,
                'url' => asset('storage/' . $path),
            ];
        }

        return $uploadedFiles;
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