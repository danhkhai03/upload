<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function uploadImg(Request $request)
    {
        try {
            $request->validate([
                'image.*' => 'required|image|mimes:jpg,jpeg,png,gif,svg,bmp,tif,webp,heic,avif,pdf|max:32768',
                'auto_delete' => 'required|numeric'
            ]);

            if ($request->hasFile('image')) {
                $uploadedImages = [];
                foreach ($request->file('image') as $file) {
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $path = $file->storeAs('uploads', $filename, 'public');

                    $autoDelete = $request->input('auto_delete');
                    $deleteAt = $this->calculateDeleteAt($autoDelete);

                    $image = Image::create([
                        'filename' => $filename,
                        'path' => $path,
                        'delete_at' => $deleteAt
                    ]);

                    $uploadedImages[] = [
                        'id' => $image->id,
                        'url' => asset('storage/' . $image->path),
                        'delete_at' => $deleteAt ? $deleteAt->toDateTimeString() : null
                    ];
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Ảnh đã được tải lên thành công.',
                    'images' => $uploadedImages
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Không có ảnh nào được chọn.'
            ], 400);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra khi tải lên ảnh: ' . $e->getMessage()
            ], 500);
        }
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
