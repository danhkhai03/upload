<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ImageService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class FileUploadController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        return view('upload');
    }

    public function uploadImg(Request $request)
    {
       
        // Tạo session ID nếu người dùng không đăng nhập
        $sessionId = $request->cookie('user_session');

        // Nếu không có session ID cho người dùng chưa đăng nhập, tạo mới và lưu cookie
        if (!$sessionId) {
            $sessionId = (string) Str::uuid();
            Cookie::queue('user_session', $sessionId, 30 * 24 * 60); // Lưu cookie 30 ngày
        }

        // Sử dụng ImageService để tải lên hình ảnh
        $result = $this->imageService->uploadImages($request->file('image'), $request->input('autoDelete', -1), $sessionId);

        return response()->json($result);
    }

    public function viewImages(Request $request)
    {
        // Lấy session ID từ cookie
        $sessionId = $request->cookie('user_session');

        if (!$sessionId) {
            return response()->json(['error' => 'Không tìm thấy phiên người dùng.'], 404);
        }

        // Truy vấn ảnh dựa trên session ID
        $uploadedImages = $this->imageService->getImagesBySessionId($sessionId);

        return view('view-images', compact('uploadedImages'));
    }
}
