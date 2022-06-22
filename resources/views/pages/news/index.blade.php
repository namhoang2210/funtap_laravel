@extends('layouts.app')
@section('title', 'Funtap - Tin tức & Sự kiện')
@section('content')
    <div class="bg-gray-100 py-16 lg:px-[13%] md:px-10 px-4">
        <div class=" text-2xl text-orange-600 uppercase">
            <a class="" href="{{ route('home') }}"> Trang chủ </a>  > <a href="{{ route('news.list') }}">Tin tức</a>
        </div>
        @if($posts->count() == 0)
            <h1 class="text-center text-xl text-gray-800 py-10">Chưa có bài đăng !!!</h1>
        @else
            <div class="py-4 grid lg:grid-cols-3 md:grid-cols-2 gap-4">
                @foreach ($posts as $post)
                <div class="">
                    <div class="border-2 border-gray-200 rounded-lg mb-4">
                        <img class="object-cover object-center w-full lg:h-48 md:h-36"
                             src=" {{ asset('storage/images/'.$post->image) }}" alt="blog">
                        <div class="p-6">
                            <h1 class="mb-2 text-lg font-medium  h-[60px] text-ellipsis overflow-hidden text-gray-900">
                                <a class="hover:text-blue-600" href="{{route('news.read', $post->id)}}">{{$post->title}}</a>
                            </h1>
                            <div class="flex gap-1 items-center text-sm text-gray-500 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    {{ $post->created_at->format('d-m-Y') }}
                                </div>

                            </div>
                            <p class="mb-2 text-sm tracking-wide text-gray-700 h-[100px] text-ellipsis overflow-hidden"> {!! nl2br($post->content) !!}</p>
                            <div class="flex items-center ">
                                <a href="{{route('news.read', $post->id)}}" class="inline-flex items-center hover:text-blue-800 text-indigo-500 cursor-pointer md:mb-2 lg:mb-0">Đọc tiếp
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
        <div class="mx-[13%]">{{ $posts->links() }}</div>
    </div>
@endsection
