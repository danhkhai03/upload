<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
</head>
<body></body>
    <nav class="border-b border-gray-300 relative z-30">
        <div class="mx-auto   ">
            <div class="flex h-12 items-center justify-between">
                <div class="relative flex items-center space-x-6">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="relative hidden sm:flex items-center space-x-6">
                        <div class="relative">
                            <div class="flex items-center space-x-2 hover:text-sky-600 cursor-pointer" id="dropdownToggle">
                                <i class="fa-regular fa-circle-question text-2xl mr-2"></i>
                                <span>Giới thiệu</span>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                            <div id="dropdownMenu" class="absolute left-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg hidden z-10">
                                <ul class="py-1">
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-code mr-2"></i>Plugin</li>
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-gear mr-2"></i>API</li>
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-landmark mr-2"></i> Terms of service</li>
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-lock mr-2"></i> Privacy</li>
                                    <li class="px-4 py-2 text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer"><i class="fa-solid fa-at mr-2"></i>Contact</li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="relative">
                            <div class="flex items-center space-x-2 hover:text-sky-600 cursor-pointer" id="languageDropdownToggle">
                                <i class="fa-solid fa-language text-2xl"></i>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                            <div id="languageDropdownMenu" class="absolute left-0 mt-2 w-[950px] bg-white border border-gray-300 rounded-md shadow-lg hidden z-10">
                                <div class="grid grid-cols-5 gap-2 p-2">
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Vietnamese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">English</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Japanese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Chinese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Korean</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Vietnamese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">English</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Japanese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Chinese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Korean</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Vietnamese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">English</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Japanese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Chinese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Korean</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Vietnamese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">English</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Japanese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Chinese</div>
                                    <div class="text-gray-800 hover:bg-sky-600 hover:text-white cursor-pointer px-4 py-2">Korean</div>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
                <div class="flex justify-center flex-grow sm:flex-grow-0">
                    <a href="/"><img src="{{ url('') }}/img/logo.png" alt="Logo" class="h-6"></a>
                </div>
    
                <div class="flex items-center space-x-4 relative">
                    <span class="cursor-pointer flex items-center hover:text-sky-600" id="uploadToggle">
                        <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                        <span class="hidden sm:inline ml-2">Upload</span> 
                    </span>
                    <span class="cursor-pointer flex items-center hover:text-sky-600" >
                        <i class="fa-solid fa-right-to-bracket text-xl"></i>
                        <span class="hidden sm:inline ml-2">Đăng nhập</span>
                    </span>
                    <a href="#" class="bg-sky-600 text-white px-4 py-2 rounded hover:bg-sky-700 transition duration-300 hidden sm:block">Đăng ký</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Điều chỉnh upload dropdown -->
    <div id="uploadDropdown" class="fixed inset-0 z-20 overflow-hidden transition-all duration-300 ease-in-out max-h-0">
        <div class="absolute inset-x-0 top-16 bottom-0 bg-black bg-opacity-50">
            <div class="bg-white shadow-lg px-2.5 " style="min-height: 66.67%; height: auto;">
                <span class="text-gray-600 text-xs">
                    JPG PNG BMP GIF TIF WEBP HEIC AVIF PDF - 32 MB
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
                                     <!-- Mỗi ảnh sẽ có một nút tắt -->
                                    <div class="relative inline-block h-24 w-24 border border-gray-300 rounded-lg overflow-hidden">
                                        <img src="IMAGE_URL" class="h-full w-full object-cover">
                                        <button class="absolute top-0 right-0 mt-1 mr-1 bg-white rounded-full p-1 shadow" onclick="resetToInitialUploadState()">
                                            <i class="fa-solid fa-times"></i>
                                        </button>
                                    </div>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownToggle = document.getElementById('dropdownToggle');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const uploadToggle = document.getElementById('uploadToggle');
        const uploadDropdown = document.getElementById('uploadDropdown');
        const closeUpload = document.getElementById('closeUpload');
        const languageDropdownToggle = document.getElementById('languageDropdownToggle');
        const languageDropdownMenu = document.getElementById('languageDropdownMenu');
        const dropZone = document.getElementById('dropZone');
        const fileUpload = document.getElementById('file-upload');
        const imagePreview = document.getElementById('imagePreview');
        const previewContainer = document.getElementById('previewContainer');
        const uploadForm = document.getElementById('uploadForm');
        const uploadButton = document.getElementById('uploadButton');
        const dropZoneContainer = document.getElementById('dropZoneContainer');
        const embedCodeText = document.getElementById('embed-code-text');
        const resetUpload = document.getElementById('resetUpload');
        
        // Xử lý dropdown menu
        function toggleDropdown(toggle, menu) {
            toggle.addEventListener('click', () => menu.classList.toggle('hidden'));
            document.addEventListener('click', (event) => {
                if (!toggle.contains(event.target) && !menu.contains(event.target)) {
                    menu.classList.add('hidden');
                }
            });
        }

        toggleDropdown(dropdownToggle, dropdownMenu);
        toggleDropdown(languageDropdownToggle, languageDropdownMenu);

        // Xử lý upload dropdown
        uploadToggle.addEventListener('click', () => {
            if (uploadDropdown.classList.contains('max-h-0')) {
                // Mở dropdown
                uploadDropdown.classList.remove('max-h-0');
                uploadDropdown.classList.add('max-h-screen'); // Hoặc một giá trị cụ thể hơn nếu cần
             
            } else {
                // Đóng dropdown
                uploadDropdown.classList.remove('max-h-screen');
                uploadDropdown.classList.add('max-h-0');
             
            }
        });

        closeUpload.addEventListener('click', () => {
            uploadDropdown.classList.remove('max-h-screen');
            uploadDropdown.classList.add('max-h-0');
           
           
        });

    
       

        // Xử lý xem trước ảnh
        function showImagePreview(files) {
            // Xóa nội dung cũ trong preview container trước khi thêm mới
            previewContainer.innerHTML = '';
            
            Array.from(files).forEach((file) => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const imgDiv = document.createElement('div');
                        imgDiv.className = 'relative inline-block h-24 w-24 border border-gray-300 rounded-lg overflow-hidden';
                        imgDiv.innerHTML = `
                            <img src="${e.target.result}" class="h-full w-full object-cover">
                        `;
                        previewContainer.appendChild(imgDiv);
                    };
                    reader.readAsDataURL(file);
                }
            });

            dropZoneContainer.classList.add('hidden');
            imagePreview.classList.remove('hidden');
            uploadButton.classList.remove('hidden'); // Hiển thị nút Upload khi có ảnh
            closeUpload.classList.add('hidden'); // Hide close button
            resetUpload.classList.remove('hidden'); // Show reset button
        }

        // Xử lý tải lên file
        fileUpload.addEventListener('change', (e) => {
            e.preventDefault(); // Ngăn chặn hành vi mặc định khi chọn file
            if (fileUpload.files.length > 0) {
                showImagePreview(fileUpload.files);
                // Hiển thị dropdown upload khi chọn ảnh
                uploadDropdown.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }
        });

        if (uploadButton) {
            uploadButton.addEventListener('click', function(e) {
                e.preventDefault(); // Ngăn chặn hành vi mặc định của form
                if (fileUpload && fileUpload.files.length > 0) {
                    const formData = new FormData(uploadForm);
                    fetch('/uploadImg', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`Lỗi mạng: ${response.status} - ${response.statusText}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            showUploadSuccess(data.images);
                        } else {
                            alert(data.message || 'Có lỗi xảy ra khi tải lên ảnh.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Có lỗi xảy ra khi tải lên ảnh: ' + error.message);
                    });
                } else {
                    alert('Vui lòng chọn hoặc kéo thả một ảnh để upload.');
                }
            });
        } else {
            console.error('Upload button not found');
        }

        const startUploadingButton = document.querySelector('label[for="file-upload"]');

        startUploadingButton.addEventListener('click', function() {
            fileUpload.click(); // Kích hoạt sự kiện chọn file
        });

        fileUpload.addEventListener('change', function() {
            if (this.files.length > 0) {
                showUploadDropdown();
                
            }
        });
    // Xử lý kéo thả
        // Lắng nghe sự kiện kéo thả trên toàn bộ trang
        document.addEventListener('dragover', (e) => {
            e.preventDefault();
            // Hiển thị form upload khi kéo ảnh vào trang
            showUploadDropdown();
        });

        document.addEventListener('drop', (e) => {
            e.preventDefault();
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileUpload.files = files; // Gán tệp vào input file
                showImagePreview(files); // Hiển thị xem trước ảnh
                showUploadDropdown(); // Hiển thị dropdown upload
            }
        });
       

        // Handle reset button click
        resetUpload.addEventListener('click', () => {
            resetToInitialUploadState();
            resetUpload.classList.add('hidden'); // Ẩn nút reset
            closeUpload.classList.remove('hidden'); // Hiển thị nút đóng
        });

        function resetToInitialUploadState() {
            // Ẩn phần xem trước ảnh        
            imagePreview.classList.add('hidden');

            // Hiển thị lại phần drop zone
            dropZoneContainer.classList.remove('hidden');

            // Ẩn nút upload
            uploadButton.classList.add('hidden');

            // Hiển thị nút đóng
            closeUpload.classList.remove('hidden');

            // Xóa nội dung trong preview container
            previewContainer.innerHTML = '';
                 
            // Đặt lại giá trị của input file
            fileUpload.value = '';

            // Ẩn phần thông báo thành công
            const successContainer = document.getElementById('showUploadSuccess');
            successContainer.classList.add('hidden');

            // Đặt lại form
            uploadForm.reset();

            // Kiểm tra nếu mọi thứ đã được đặt lại đúng cách (dành cho gỡ lỗi)
            console.log('Form reset, UI reset to initial state');
        }

        // Xử lý sự kiện paste
        document.addEventListener('paste', (event) => {
            const items = event.clipboardData.items;
            const files = [];
            Array.from(items).forEach(item => {
                if (item.type.indexOf('image') !== -1) {
                    const file = item.getAsFile();
                    files.push(file);
                }
            });

            if (files.length > 0) {
                // Gán tệp vào input file
                const dataTransfer = new DataTransfer();
                files.forEach(file => dataTransfer.items.add(file));
                fileUpload.files = dataTransfer.files;

                // Hiển thị xem trước ảnh
                showImagePreview(files);

                // Hiển thị dropdown upload
                showUploadDropdown();
            }
        });

        // Ngăn chặn hành vi mặc định của form khi submit
        uploadForm.addEventListener('submit', function(e) {
            e.preventDefault();
        });
    });

    function showUploadSuccess(images) {
        const successContainer = document.getElementById('showUploadSuccess');
        const successPreviewContainer = successContainer.querySelector('.flex.justify-center.mb-6');
        const embedCodeText = successContainer.querySelector('#embed-code-text');

        // Xóa nội dung cũ trong preview container
        successPreviewContainer.innerHTML = '';

        // Thêm ảnh mới vào preview container
        images.forEach(image => {
            const imgElement = document.createElement('img');
            imgElement.src = image.url;
            imgElement.alt = "Uploaded image";
            imgElement.className = "w-32 h-32 object-cover rounded-lg shadow-md mx-2";
            successPreviewContainer.appendChild(imgElement);
        });

        // Cập nhật mã nhúng
        embedCodeText.value = images[0].url;

        // Hiển thị phần thông báo thành công và ẩn các phần khác
        dropZoneContainer.classList.add('hidden');
        imagePreview.classList.add('hidden');
        successContainer.classList.remove('hidden');

        // Cập nhật nút reset
        
    }

    // Thêm sự kiện cho nút reset
   

    function showUploadDropdown() {
        const uploadDropdown = document.getElementById('uploadDropdown');
        uploadDropdown.classList.remove('max-h-0');
        uploadDropdown.classList.add('max-h-screen');
        document.body.classList.add('overflow-hidden');
    }

</script>
    <style>
        #previewContainer img {
            object-fit: cover;
        }
        #dropZone:hover {
            cursor: pointer;
        }
    </style>
</html>
