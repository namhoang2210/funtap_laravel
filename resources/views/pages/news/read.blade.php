@extends('layouts.app')
@section('title', 'Funtap - Tin tức & Sự kiện')
@section('content')
    <div class="px-4 md:px-10 lg:px-[13%] py-20 bg-gray-100">
        <div class=" text-2xl text-orange-600 uppercase">
            <a class="" href="{{ route('home') }}"> Trang chủ </a>  > <a href="{{ route('news.list') }}">Tin tức</a>
        </div>
        @if (Session::has('message'))
            <div class="text-center w-full text-white py-3 mb-10 rounded bg-green-600">{{ Session::get('message') }}</div>
        @endif
        @if(!empty($news))
            <div class="text-3xl pb-10 pt-6 font-semibold text-gray-800">{{ $news->title }}</div>

            <div class="w-full rounded flex justify-center">
                <img class="max-h-[300px] w-auto rounded" src="{{ asset('storage/images/'.$news->image) }}">
            </div>
            <p class="pt-10">
                {!! nl2br($news->content) !!}
            </p>
            <div class="flex gap-1 items-center justify-end pt-10 text-sm text-gray-500 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    {{ $news->created_at->format('d-m-Y') }}
                </div>

            </div>
        @endif
    </div>
@endsection
