<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }
    public function uploadImg(Request $request)
    {
        $request->validate([
            'image.*' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('uploads', $filename, 'public');

                Image::create([
                    'filename' => $filename,
                    'path' => $path
                ]);
            }

            return back()->with('success', 'Ảnh đã được tải lên thành công.');
        }

        return back()->with('error', 'Không có ảnh nào được chọn.');
    }
}
