<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
// Route::get('/', function () {
//     return view('upload');
// });
Route::get('/', [FileUploadController::class, 'index']);
Route::post('/uploadImg', [FileUploadController::class, 'uploadImg'])->name('uploadImg');
