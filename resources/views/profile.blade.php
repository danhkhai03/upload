@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Hồ sơ của {{ $user->name }}</h1>
    <p class="text-gray-600">Email: {{ $user->email }}</p>

    <h2 class="text-xl font-semibold mt-6">Các hình ảnh của bạn:</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
        @foreach($images as $image)
            <div class="border rounded-lg p-4 flex items-center justify-between">
                @if(in_array(pathinfo($image->filename, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif', 'svg', 'bmp', 'tif', 'webp']))
                    <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->filename }}" class="w-1/4 h-auto rounded mr-4" loading="lazy">
                @else
                    @switch(pathinfo($image->filename, PATHINFO_EXTENSION))
                        @case('pdf')
                            <i class="fa-solid fa-file-pdf text-red-600 text-8xl "></i>
                            @break
                        @case('doc')
                        @case('docx')
                            <i class="fa-solid fa-file-word text-blue-600 text-8xl"></i>
                            @break
                        @case('ppt')
                        @case('pptx')
                            <i class="fa-solid fa-file-powerpoint text-orange-600 text-8xl"></i>
                            @break
                        @case('txt')
                            <i class="fa-solid fa-file-alt text-gray-600 text-8xl"></i>
                            @break
                        @default
                            <i class="fa-solid fa-file text-gray-600 text-8xl"></i>
                    @endswitch
                @endif
                <p class="text-gray-600 text-sm">{{ Str::limit($image->filename, 35) }}</p>
            </div>
        @endforeach
    </div>
    
</div>
@endsection