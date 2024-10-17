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
        <div class="mx-auto px-2 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
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
                    <a href="/"><img src="{{ url('') }}/img/logo.png" alt="Logo" class="h-10"></a>
                </div>
    
                <div class="flex items-center space-x-4 relative">
                    <span class="cursor-pointer flex items-center" id="uploadToggle">
                        <i class="fa-solid fa-cloud-arrow-up text-xl"></i>
                        <span class="hidden sm:inline ml-2">Upload</span> 
                    </span>
                    <span class="cursor-pointer flex items-center">
                        <i class="fa-solid fa-right-to-bracket text-xl"></i>
                        <span class="hidden sm:inline ml-2">Đăng nhập</span>
                    </span>
                    <a href="#" class="bg-sky-600 text-white px-4 py-2 rounded hover:bg-sky-700 transition duration-300 hidden sm:block">Đăng ký</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Điều chỉnh upload dropdown -->
    <div id="uploadDropdown" class="hidden fixed inset-0 z-20">
        <div class="absolute inset-x-0 top-16 bottom-0 bg-black bg-opacity-50">
            <div class="bg-white h-2/3 shadow-lg">
                <div class="container mx-auto h-full flex flex-col">
                    <div class="flex justify-between items-center p-4 border-b">
                        <div class="mt-4 text-gray-600 text-sm text-center">
                            JPG PNG BMP GIF TIF WEBP HEIC AVIF PDF - 32 MB
                        </div>
                        <button id="closeUpload" class="text-gray-500 hover:text-gray-700">
                            <i class="fa-solid fa-times text-xl"></i>
                        </button>
                    </div>
                    <form action="{{ route('uploadImg') }}" method="post" enctype="multipart/form-data" id="uploadForm">
                        @csrf
                        <div class="flex-grow p-6 flex flex-col items-center justify-center">
                            <div id="dropZoneContainer" class="w-full max-w-2xl">
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center" id="dropZone">
                                    <i class="fa-solid fa-cloud-arrow-up text-5xl text-gray-400 mb-4"></i>
                                    <h3 class="text-xl font-semibold mb-2">Kéo thả hoặc paste (Ctrl + V) ảnh vào đây để upload</h3>
                                    <p class="text-gray-600 mb-4">
                                        Bạn có thể 
                                        <label for="file-upload" class="text-sky-600 hover:text-sky-700 cursor-pointer">
                                            tải lên từ máy tính
                                        </label>
                                        <input id="file-upload" type="file" name="image[]" class="hidden" accept="image/*" multiple>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Preview Section -->
                            <div id="imagePreview" class="hidden mt-4 w-full max-w-2xl text-center">
                                <h4 class="text-lg font-semibold mb-2 ">Xem trước ảnh:</h4>
                                <div id="previewContainer" class="grid grid-cols-4 gap-4 justify-items-center"></div>
                            </div>

                            <button id="uploadButton" class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition duration-300">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class=" mx-auto flex flex-col items-center justify-center min-h-screen  py-12 text-center">
        <div class="mb-8">
                <h1 class="text-5xl font-semibold text-gray-800 my-2.5;" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.25);">Đăng và chia sẻ những bức ảnh của bạn</h1>
                <p class="w-[790px] my-5 text-xl text-gray-600 hidden sm:flex" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.25);">Drag and drop anywhere you want and start uploading your images now. 32 MB limit. Direct image links, BBCode and HTML thumbnails.</p>
        </div>
        <div>
                <a href="" class="bg-sky-600 text-white px-6 py-3 rounded-full hover:bg-sky-700 transition duration-300">Start uploading</a>
        </div>
</div>
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
            uploadDropdown.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        });

        closeUpload.addEventListener('click', closeUploadDropdown);
        uploadDropdown.addEventListener('click', (event) => {
            if (event.target === uploadDropdown) closeUploadDropdown();
        });

        function closeUploadDropdown() {
            uploadDropdown.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        // Xử lý xem trước ảnh
        function showImagePreview(files) {
            previewContainer.innerHTML = '';
            Array.from(files).forEach((file, index) => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const imgDiv = document.createElement('div');
                        imgDiv.className = 'relative inline-block h-24 w-24 border border-gray-300 rounded-lg overflow-hidden';
                        imgDiv.innerHTML = `
                            <img src="${e.target.result}" class="h-full w-full object-cover">
                            <button class="absolute top-0 right-0 text-white bg-red-600 hover:bg-red-800 rounded-full h-6 w-6 flex items-center justify-center -mt-2 -mr-2" onclick="removeImage(${index})">&times;</button>
                        `;
                        previewContainer.appendChild(imgDiv);
                    };
                    reader.readAsDataURL(file);
                }
            });
            dropZoneContainer.classList.add('hidden');
            imagePreview.classList.remove('hidden');
            uploadButton.classList.remove('hidden');
        }

        // Xử lý tải lên file
        fileUpload.addEventListener('change', () => showImagePreview(fileUpload.files));

        // Xử lý kéo thả
        dropZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropZone.classList.add('border-sky-600');
        });

        dropZone.addEventListener('dragleave', () => dropZone.classList.remove('border-sky-600'));

        dropZone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropZone.classList.remove('border-sky-600');
            fileUpload.files = e.dataTransfer.files;
            showImagePreview(fileUpload.files);
        });

        // Xử lý paste
        document.addEventListener('paste', (e) => {
            const files = Array.from(e.clipboardData.items)
                .filter(item => item.kind === 'file' && item.type.startsWith('image/'))
                .map(item => item.getAsFile());
            fileUpload.files = new FileList(files);
            showImagePreview(fileUpload.files);
        });

        // Xóa ảnh
        window.removeImage = function(index) {
            const dt = new DataTransfer();
            Array.from(fileUpload.files).forEach((file, i) => {
                if (i !== index) dt.items.add(file);
            });
            fileUpload.files = dt.files;
            if (fileUpload.files.length === 0) {
                dropZoneContainer.classList.remove('hidden');
                imagePreview.classList.add('hidden');
                uploadButton.classList.add('hidden');
            } else {
                showImagePreview(fileUpload.files);
            }
        };

        // Xử lý nút upload
        uploadButton.addEventListener('click', () => {
            if (fileUpload.files.length > 0) {
                uploadForm.submit();
            } else {
                alert('Vui lòng chọn hoặc kéo thả một ảnh để upload.');
            }
        });
    });
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
