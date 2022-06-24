@extends('layouts.admin')
@section('title','Dashboard - Giới thiệu')
@section('content')
    <div class="bg-white m-10 rounded-lg min-h-[450px] p-10">
        @if (Session::has('message'))
            <div class="text-center w-full text-white py-3 mb-10 rounded bg-green-600">{{ Session::get('message') }}</div>
        @endif
        <div>
            <div class="text-2xl text-orange-600 uppercase underline">Sologan</div>
            @if($about->where('type','slogan')->count() > 0)
            <div class="flex justify-between items-center">
                <h1 class="uppercase p-4">{{ $about->where('type','slogan')->first()->title }}</h1>
                <div class="flex items-center">
                    <a href="{{ route('admin.about.edit', $about->where('type','slogan')->first()->id ) }}">
                        <button class="bg-blue-500 text-white px-4 py-2 m-4 rounded hover:bg-blue-600">
                            Chỉnh sửa
                        </button>
                    </a>
                    <a href="{{ route('admin.about.delete', $about->where('type','slogan')->first()->id ) }}">
                        <button class="bg-red-500 text-white m-4 px-4 py-2 rounded hover:bg-red-600">
                            Xóa
                        </button>
                    </a>
                </div>
            </div>
            @else
                <form action="{{ route('admin.about.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="slogan" name="type">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 m-4 rounded hover:bg-green-600">
                        Thêm mới
                    </button>
                </form>
            @endif
            <hr>
        </div>

        <div>
            <div class="text-2xl text-orange-600 uppercase underline pt-4">Giá trị cốt lõi</div>
            @foreach($about->where('type','core_value')->all() as $coreValue )
                <div class="">
                    <div class="flex justify-between items-center w-full">
                        <h1 class="uppercase p-4 font-medium">{{ $coreValue->title }}:</h1>
                        <div class="flex items-center">
                            <a href="{{ route('admin.about.edit', $coreValue->id ) }}">
                                <button class="bg-blue-500 text-white m-4 px-4 py-2 rounded hover:bg-blue-600">
                                    Chỉnh sửa
                                </button>
                            </a>
                            <a href="{{ route('admin.about.delete', $coreValue->id ) }}">
                                <button class="bg-red-500 text-white m-4 px-4 py-2 rounded hover:bg-red-600">
                                    Xóa
                                </button>
                            </a>
                        </div>
                    </div>
                    <p class="px-10 pb-8">{{$coreValue->content}}</p>
                    <hr>
                </div>
            @endforeach
            @if($about->where('type','core_value')->count() < 2)
                <form action="{{ route('admin.about.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="core_value" name="type">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 m-4 rounded hover:bg-green-600">
                        Thêm mới
                    </button>
                </form>
            @endif
        </div>

        <div>
            <div class="text-2xl text-orange-600 uppercase underline pt-4">Nội dung</div>
            @foreach($about->where('type','content')->all() as $contentAbout )
                <div class="">
                    <div class="flex justify-between items-center w-full">
                        <h1 class="uppercase p-4 font-medium">{{ $contentAbout->title }}:</h1>
                        <div>
                            <a href="{{ route('admin.about.edit', $contentAbout->id ) }}">
                                <button class="bg-blue-500 text-white m-4 px-4 py-2 rounded hover:bg-blue-600">
                                    Chỉnh sửa
                                </button>
                            </a>
                            <a href="{{ route('admin.about.delete', $contentAbout->id ) }}">
                                <button class="bg-red-500 text-white m-4 px-4 py-2 rounded hover:bg-red-600">
                                    Xóa
                                </button>
                            </a>
                        </div>
                    </div>
                    <p class="px-10 pb-8">{{$contentAbout->content}}</p>
                    <hr>
                </div>
            @endforeach
            @if($about->where('type','content')->count() < 4)
                <form action="{{ route('admin.about.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="content" name="type">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 m-4 rounded hover:bg-green-600">
                        Thêm mới
                    </button>
                </form>
            @endif
        </div>
        <div>
            <div class="text-2xl text-orange-600 uppercase underline pt-4">Lịch sử</div>
            @foreach($about->where('type','history')->all() as $historyAbout )
                <div class="">
                    <div class="flex justify-between items-center w-full">
                        <h1 class="uppercase p-4 font-medium">{{ $historyAbout->time }} - {{ $historyAbout->title }}:</h1>
                        <div>
                            <a href="{{ route('admin.about.edit', $historyAbout->id ) }}">
                                <button class="bg-blue-500 text-white m-4 px-4 py-2 rounded hover:bg-blue-600">
                                    Chỉnh sửa
                                </button>
                            </a>
                            <a href="{{ route('admin.about.delete', $historyAbout->id ) }}">
                                <button class="bg-red-500 text-white m-4 px-4 py-2 rounded hover:bg-red-600">
                                    Xóa
                                </button>
                            </a>
                        </div>
                    </div>
                    <p class="px-10 pb-8">{{$historyAbout->content}}</p>
                    <hr>
                </div>
            @endforeach

            <form action="{{ route('admin.about.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="history" name="type">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 m-4 rounded hover:bg-green-600">
                    Thêm mới
                </button>
            </form>

        </div>
    </div>
@endsection
