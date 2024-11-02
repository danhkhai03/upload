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
<body>
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
                <span class="cursor-pointer flex items-center hover:text-sky-600">
                    @if(!Auth::check())
                        <a href="{{ route('view.images') }}" class="px-6 py-3 rounded-full hover:text-sky-600 transition duration-300">
                            <i class="fa-solid fa-image text-xl"></i>
                            <span class="hidden sm:inline ml-2">Ảnh upload</span>
                        </a>
                    @endif
                </span>

                <div class="flex-grow flex justify-center">
                    <a href="/"><img src="{{ url('') }}/img/logo.png" alt="Logo" class="h-6"></a>
                </div>

                <div class="flex items-center space-x-4 relative">
                    @if(Auth::check())
                    <span class="cursor-pointer flex items-center hover:text-sky-600" id="uploadToggle">
                        @if(request()->is('profile')) <!-- Kiểm tra nếu đang ở trang view-images -->
                        <a href="{{ url('/') }}"> <!-- Dẫn về trang chủ -->
                            <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                            <span class="hidden sm:inline ml-2">Upload</span>
                        </a>
                    @else
                        
                            <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                            <span class="hidden sm:inline ml-2">Upload</span>
                        
                    @endif
                    </span>
                        <span class="text-gray-800">
                            <a href="{{ route('profile') }}" class="hover:text-sky-600">{{ Auth::user()->name }}</a>
                        </span>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition duration-300">Đăng xuất</button>
                        </form>
                    @else
                    
                    
                    <span class="cursor-pointer flex items-center hover:text-sky-600" id="uploadToggle">
                        @if(request()->is('view-images'))
                            <a href="{{ url('/') }}">
                                <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                                <span class="hidden sm:inline ml-2">Upload</span>
                            </a>
                        @else
                           
                                <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                                <span class="hidden sm:inline ml-2">Upload</span>
                            
                        @endif
                    </span>
                  
                        <span class="cursor-pointer flex items-center hover:text-sky-600">
                            <a href="{{ route('login') }}">
                                <i class="fa-solid fa-right-to-bracket text-xl"></i>
                                <span class="hidden sm:inline ml-2">Đăng nhập</span>
                            </a>
                        </span>
                        <a href="{{ route('register') }}" class="bg-sky-600 text-white px-4 py-2 rounded hover:bg-sky-700 transition duration-300 hidden sm:block">Đăng ký</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
   
    @yield('content')

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
                
                Array.from(files).forEach((file, index) => {
                    const imgDiv = document.createElement('div');
                    imgDiv.className = 'relative inline-block h-24 w-24 border border-gray-300 rounded-lg overflow-hidden';
                    
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            imgDiv.innerHTML = `
                                <img src="${e.target.result}" class="h-full w-full object-cover">
                                <div class="absolute top-1 left-0.5 flex space-x-2">
                                    <button class="remove-image bg-white w-5 h-5 rounded-full shadow-md hover:bg-gray-100 transition-colors duration-200 flex items-center justify-center" data-index="${index}">
                                        <i class="fas fa-times text-gray-600 text-xs"></i>
                                    </button>
                                </div>
                            `;
                            previewContainer.appendChild(imgDiv);
                        };
                        reader.readAsDataURL(file);
                    } else {
                        // Hiển thị icon cho các loại file không phải ảnh
                        let iconClass = 'fas fa-file'; // Mặc định là icon file
                        if (file.type === 'application/pdf') {
                            iconClass = 'fas fa-file-pdf'; // Icon PDF
                        } else if (file.type === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' || 
                                   file.type === 'application/msword') {
                            iconClass = 'fas fa-file-word'; // Icon Word
                        } else if (file.type === 'application/vnd.openxmlformats-officedocument.presentationml.presentation' || 
                                   file.type === 'application/vnd.ms-powerpoint') {
                            iconClass = 'fas fa-file-powerpoint'; // Icon PowerPoint
                        } else if (file.type.startsWith('application/vnd.ms-excel') || 
                                   file.type.startsWith('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')) {
                            iconClass = 'fas fa-file-excel'; // Icon Excel
                        }
                        imgDiv.innerHTML = `
                            <i class="${iconClass} text-gray-600 text-8xl"></i>
                            <div class="absolute top-1 left-0.5 flex space-x-2">
                                <button class="remove-image bg-white w-5 h-5 rounded-full shadow-md hover:bg-gray-100 transition-colors duration-200 flex items-center justify-center" data-index="${index}">
                                    <i class="fas fa-times text-gray-600 text-xs"></i>
                                </button>
                            </div>
                        `;
                        previewContainer.appendChild(imgDiv);
                    }
                });
    
                dropZoneContainer.classList.add('hidden');
                imagePreview.classList.remove('hidden');
                uploadButton.classList.remove('hidden');
                closeUpload.classList.add('hidden');
                resetUpload.classList.remove('hidden');
            }
    
            // Thêm event listener cho previewContainer sử dụng event delegation
            previewContainer.addEventListener('click', function(e) {
                if (e.target.closest('.remove-image')) {
                    const button = e.target.closest('.remove-image');
                    const imageDiv = button.closest('.relative');
                    imageDiv.remove();
                    
                    // Kiểm tra nu không còn ảnh nào, reset về trạng thái ban đầu
                    if (previewContainer.children.length === 0) {
                        resetToInitialUploadState();
                        resetUpload.classList.add('hidden');
                    }
                }
            });
    
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
                    if (data.errors.length > 0) {
                        alert('Có lỗi xảy ra với các file sau:\n' + data.errors.join('\n'));
                    }
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

        // Xử lý kéo th
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
                // n phần xem trước ảnh        
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
    
            // X lý sự kiện paste
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
    
            // Ngăn chặn hành vi mặc ịnh của form khi submit
            uploadForm.addEventListener('submit', function(e) {
                e.preventDefault();
            });
        });
    
        function showUploadSuccess(images) {
            const successContainer = document.getElementById('showUploadSuccess');
            const successPreviewContainer = document.getElementById('successPreviewContainer');
            const embedCodeText = successContainer.querySelector('#embed-code-text');
    
            // Xóa nội dung cũ trong preview container
            successPreviewContainer.innerHTML = '';
    
            // Thêm ảnh mới vào preview container
            images.forEach((image, index) => {
                const imgDiv = document.createElement('div');
                imgDiv.className = 'relative inline-block h-24 w-24 border border-gray-300 rounded-lg overflow-hidden';
                
                console.log('Image URL:', image.url); // Kiểm tra giá trị của image.url
               
                let fileType = image.type || getFileTypeFromUrl(image.url);
                // Kiểm tra nếu là ảnh
                if (image.url && fileType.startsWith('image/')) {
                    // Nếu là ảnh, hiển thị ảnh
                    imgDiv.innerHTML = `
                        <a href="${image.url}" target="_blank">
                            <img src="${image.url}" class="h-full w-full object-cover">
                        </a>
                    `;
                } else {
                    // Nếu không phải ảnh, hiển thị icon tương ứng
                    let iconClass = 'fas fa-file'; // Mặc định là icon file
                    if (fileType === 'application/pdf') {
                        iconClass = 'fas fa-file-pdf'; // Icon PDF
                    } else if (fileType === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' || 
                               fileType === 'application/msword') {
                        iconClass = 'fas fa-file-word'; // Icon Word
                    } else if (fileType === 'application/vnd.openxmlformats-officedocument.presentationml.presentation' || 
                               fileType === 'application/vnd.ms-powerpoint') {
                        iconClass = 'fas fa-file-powerpoint'; // Icon PowerPoint
                    } else if (fileType.startsWith('application/vnd.ms-excel') || 
                               fileType.startsWith('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')) {
                        iconClass = 'fas fa-file-excel'; // Icon Excel
                    }

                    imgDiv.innerHTML = `
                        <a href="${image.url}" target="_blank">
                            <i class="${iconClass} text-gray-600 text-8xl"></i>
                        </a>
                        <div class="absolute top-1 left-0.5 flex space-x-2">
                            <button class="remove-image bg-white w-5 h-5 rounded-full shadow-md hover:bg-gray-100 transition-colors duration-200 flex items-center justify-center" data-index="${index}">
                                <i class="fas fa-times text-gray-600 text-xs"></i>
                            </button>
                        </div>
                    `;
                }
                successPreviewContainer.appendChild(imgDiv);
            });
            function getFileTypeFromUrl(url) {
            const extension = url.split('.').pop().toLowerCase();
            switch (extension) {
                case 'jpg':
                case 'jpeg':
                case 'png':
                case 'gif':
                case 'bmp':
                case 'webp':
                case 'tiff':
                case 'tif':
                    return 'image/' + extension;
                case 'pdf':
                    return 'application/pdf';
                case 'doc':
                case 'docx':
                    return 'application/msword';
                case 'ppt':
                case 'pptx':
                    return 'application/vnd.ms-powerpoint';
                case 'xls':
                case 'xlsx':
                    return 'application/vnd.ms-excel';
                default:
                    return 'application/octet-stream'; // Mặc định cho các loại tệp không xác định
            }
        }
    
            // Cập nhật mã nhúng
            embedCodeText.value = images[0].url;
    
            // Hiển thị phần thông báo thành công và ẩn các phần khác
            dropZoneContainer.classList.add('hidden');
            imagePreview.classList.add('hidden');
            successContainer.classList.remove('hidden');
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