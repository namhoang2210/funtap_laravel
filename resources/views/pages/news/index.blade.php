@extends('layouts.app')
@section('title', 'Funtap - Tin tức & Sự kiện')
@section('content')
    <div class="bg-gray-100 py-16">
        @if($posts->count() == 0)
            <h1 class="text-center text-xl text-gray-800 py-10">Chưa có bài đăng !!!</h1>
        @else

            <div class="py-10 grid grid-cols-3 gap-10 px-32">
            @foreach ($posts as $post)
                <div class="flex justify-center">
                    <a href="#!">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm">
                        <img class="rounded-t-lg h-[250px] w-[350px] object-cover"  src=" {{ asset('storage/images/'.$post->image) }}" alt=""/>
                        <div class="p-6">
                            <div class="text-gray-900 text-xl font-medium h-[60px] text-ellipsis overflow-hidden mb-4">{{ $post->title }}</div>
                            <div class="flex gap-1 items-center text-sm text-gray-500 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    {{ $post->created_at->format('d-m-Y') }}
                                </div>

                            </div>
                            <div class="text-gray-700 text-base mb-4 h-[100px] text-ellipsis overflow-hidden">
                               {{$post->content}}
                            </div>
                            <button type="button" class=" inline-block px-6 py-2.5 bg-orange-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-orange-700 hover:shadow-lg  ">Xem tiếp ...</button>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
            </div>
        @endif
    </div>
@endsection
