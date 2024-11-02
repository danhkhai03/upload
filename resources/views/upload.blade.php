@extends('layouts.app')

@section('content')
    <!-- Điều chỉnh upload dropdown -->
    <div id="uploadDropdown" class="fixed inset-0 z-20 overflow-hidden transition-all duration-300 ease-in-out max-h-0">
        <div class="absolute inset-x-0 top-16 bottom-0 bg-black bg-opacity-50">
            <div class="bg-white shadow-lg px-2.5 " style="min-height: 66.67%; height: auto;">
                <span class="text-gray-600 text-xs">
                    JPG, PNG, BMP, GIF, TIF, WEBP, HEIC, AVIF, PDF, DOC, DOCX, TXT - 32 MB
                </span>
                <button id="closeUpload" class="text-gray-500 hover:text-gray-700 absolute top-0 right-0 mt-2 mr-2">
                    <i class="fa-solid fa-times text-xs"></i> <span class="hidden sm:inline">Đóng</span>
                </button>
                <button id="resetUpload" class="text-gray-500 hover:text-gray-700 absolute top-0 right-0 mt-2 mr-2 hidden">
                    <i class="fa-solid fa-undo text-xs"></i> <span class="hidden sm:inline">Reset</span>
                </button>
                <div class="container mx-auto h-full flex flex-col">
                    <form action="{{ route('uploadImg') }}" method="post" enctype="multipart/form-data" id="uploadForm">
                        @csrf
                        <div class="flex-grow p-6 flex flex-col items-center justify-center">
                            <div id="dropZoneContainer" class="w-full max-w-2xl">
                                <div class=" rounded-lg p-8 text-center" id="dropZone">
                                    <i class="fa-solid fa-cloud-arrow-up text-8xl text-sky-600 mb-4"></i>
                                    <h3 class="text-xl font-semibold mb-2">Kéo thả hoặc paste (Ctrl + V) ảnh vào đây để upload</h3>
                                    <p class="text-gray-600 mb-4">
                                        Bạn có thể 
                                        <label for="file-upload" class="text-sky-600 hover:text-sky-700 cursor-pointer">
                                            
                                        </label>
                                        <label for="file-upload" class="text-sky-600 hover:text-sky-700 cursor-pointer">
                                            tải lên từ máy tính
                                        </label>
                                        hoặc
                                        <label for="file-upload" class="text-sky-600 hover:text-sky-700 cursor-pointer">
                                            thêm địa chỉ ảnh
                                        </label>
                                        <input id="file-upload" type="file" name="image[]" class="hidden" accept="image/*" multiple>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Preview Section -->
                            <div id="imagePreview" class="hidden mt-4 w-full max-w-2xl text-center">
                                <!-- Preview content -->
                                <i class="fa-solid fa-images text-8xl text-sky-600 mb-4"></i> </br>
                    
                                <span class="text-xl font-semibold mb-2">Sửa hoặc chỉnh cỡ bất kì ảnh nào bởi nhấp vào xem thử</span>
                                <p class="text-gray-600 mb-4">
                                    Bạn có thể 
                                    <label for="file-upload" class="text-sky-600 hover:text-sky-700 cursor-pointer">
                                        tải lên từ máy tính
                                    </label>
                                    hoặc
                                    <label for="file-upload" class="text-sky-600 hover:text-sky-700 cursor-pointer">
                                        thêm địa chỉ ảnh
                                    </label>
                                    <input id="file-upload" type="file" name="image[]" class="hidden" accept="image/*" multiple>
                                </p>
                                <div id="previewContainer" class="flex flex-wrap justify-center gap-4 mx-auto">
                                   
                                </div>
                                <div class="mt-4 relative">
                                    <label>
                                        Tự động xóa ảnh
                                    </label>
                                    <select name="auto_delete" id="auto_delete" class="block appearance-none w-1/3 mx-auto bg-gray-100 border border-gray-300 hover:border-gray-400 px-2 py-1 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline relative">
                                        <option value="0.33">Sau 20 giây</option>
                                        <option value="0.0167">Sau 1 phút</option>
                                        <option value="0.5">Sau 30 phút</option>
                                        <option value="1">Sau 1 giờ</option>
                                        <option value="3">Sau 3 giờ</option>
                                        <option value="6">Sau 6 giờ</option>
                                        <option value="12">Sau 12 giờ</option>
                                        <option value="24">Sau 1 ngày</option>
                                        <option value="48">Sau 2 ngày</option>
                                        <option value="72">Sau 3 ngày</option>
                                        <option value="96">Sau 4 ngày</option>
                                        <option value="120">Sau 5 ngày</option>
                                        <option value="144">Sau 6 ngày</option>
                                        <option value="168">Sau 1 tuần</option>
                                        <option value="336">Sau 2 tuần</option>
                                        <option value="504">Sau 3 tuần</option>
                                        <option value="720">Sau 1 tháng</option>
                                        <option value="1440">Sau 2 tháng</option>
                                        <option value="2160">Sau 3 tháng</option>
                                        <option value="2880">Sau 4 tháng</option>
                                        <option value="3600">Sau 5 tháng</option>
                                        <option value="-1">Đừng tự động xóa</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700" style="top: 32px;">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                                <!-- Upload button only appears in the preview section -->
                                <button id="uploadButton" class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition duration-300 hidden">Upload</button>
                            </div>
                            <div id="showUploadSuccess" class="hidden mt-4 w-full max-w-2xl text-center">
                                <div class="text-center mb-6">
                                    <i class="fas fa-check-circle text-6xl text-green-500 mb-4"></i>
                                    <h1 class="text-3xl font-bold text-gray-800">Upload xong rồi!</h1>
                                    <p class="text-gray-600 mt-2">
                                        You can <a href="#" class="text-blue-500 hover:underline">tạo album mới</a> with the content just uploaded. You must 
                                        <a href="#" class="text-blue-500 hover:underline">tạo tài khoản</a> or 
                                        <a href="#" class="text-blue-500 hover:underline">đăng nhập</a> to save this content into your account.
                                    </p>
                                </div>
                                <div class="flex justify-center mb-6">
                                    ${images.map(image => `<img src="${image.url}" alt="Uploaded image" class="w-32 h-32 object-cover rounded-lg shadow-md mx-2">`).join('')}
                                </div>
                                <div class="mb-6">
                                    <label for="embed-code" class="block text-sm font-medium text-gray-700 mb-2">Mã nhúng</label>
                                    <div class="relative">
                                        <select id="embed-code" name="embed-code" class="block bg-gray-200 w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                            <option>Link người xem</option>
                                            <option>HTML</option>
                                            <option>BBCode</option>
                                        </select>
                                    </div>
                                    <textarea id="embed-code-text" class="mt-2 block w-full px-3 py-2 bg-gray-200 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md" rows="3" readonly>${images[0].url}</textarea>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('uploadImg') }}" method="post" enctype="multipart/form-data" id="uploadForm">
    <div class=" mx-auto flex flex-col items-center justify-center min-h-screen  py-12 text-center">
        <div class="mb-8">
                <h1 class="text-5xl font-semibold text-gray-800 my-2.5;" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.25);">Đăng và chia sẻ những bức ảnh của bạn</h1>
                <p class="w-[790px] my-5 text-xl text-gray-600 hidden sm:flex" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.25);">Drag and drop anywhere you want and start uploading your images now. 32 MB limit. Direct image links, BBCode and HTML thumbnails.</p>
        </div>
        <div>
                <label  for="file-upload" class="bg-sky-600 text-white px-6 py-3 rounded-full hover:bg-sky-700 transition duration-300">Start uploading</label>
        </div>
    </div>
    </form>
</body>
@endsection

