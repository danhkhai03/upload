<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ImageService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;
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
    $sessionId = Auth::check() ? null : (request()->cookie('user_session') ?? Str::uuid());

    // Nếu không có session ID cho người dùng chưa đăng nhập, lưu cookie
    if ($sessionId) {
        Cookie::queue('user_session', $sessionId, 30 * 24 * 60); // Lưu cookie 30 ngày
    }

    $uploadedFiles = [];
    $errors = [];

    // Kiểm tra nếu không có tệp nào được tải lên
    if (!$request->hasFile('image') || !$request->file('image')) {
        return response()->json([
            'success' => false,
            'message' => 'Không có tệp nào được tải lên.',
        ], 400);
    }

    foreach ($request->file('image') as $file) {
        // Kiểm tra định dạng và kích thước file
        if (!$file->isValid() || !in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif', 'svg', 'bmp', 'tif', 'webp', 'heic', 'avif', 'pdf', 'doc', 'docx', 'pptx', 'txt']) || $file->getSize() > 32768 * 1024) {
            $errors[] = "File {$file->getClientOriginalName()} không hợp lệ hoặc vượt quá kích thước cho phép.";
            continue; // Bỏ qua file không hợp lệ
        }

        // Xử lý file hợp lệ
        try {
            DB::beginTransaction(); // Bắt đầu transaction cho từng file hợp lệ

            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads', $filename, 'public');

            $image = new Image();
            $image->filename = $filename;
            $image->path = $path;
            $image->session_id = $sessionId;
            $image->user_id = Auth::id();
            $image->save();

            DB::commit(); // Commit nếu lưu file thành công

            $uploadedFiles[] = [
                'filename' => $filename,
                'path' => $path,
                'url' => asset('storage/' . $path),
            ];
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback cho file nếu lưu không thành công
            $errors[] = "Có lỗi khi tải lên file {$file->getClientOriginalName()}: " . $e->getMessage();
        }
    }

    return response()->json([
        'success' => count($uploadedFiles) > 0,
        'images' => $uploadedFiles,
        'errors' => $errors,
        'message' => count($uploadedFiles) > 0 ? 'Tải lên thành công' : 'Không có file nào hợp lệ được tải lên',
    ]);
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
