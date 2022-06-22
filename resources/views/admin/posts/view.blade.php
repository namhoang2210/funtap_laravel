@extends('layouts.admin')
@section('title','Dashboard - Xem bài viết')
@section('content')

    <div class="m-10 rounded p-20 bg-white">
        @if (Session::has('message'))
            <div class="text-center w-full text-white py-3 mb-10 rounded bg-green-600">{{ Session::get('message') }}</div>
        @endif
        @if(!empty($post))
            <div class="text-3xl pb-10 pt-6 font-semibold text-gray-800">{{ $post->title }}</div>

            <div class="w-full rounded flex justify-center">
                <img class="max-h-[300px] w-auto rounded" src="{{ asset('storage/images/'.$post->image) }}">
            </div>
            <p class="pt-10">
                {!! nl2br($post->content) !!}
            </p>
            <div class="flex gap-1 items-center justify-end pt-10 text-sm text-gray-500 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    {{ $post->created_at->format('d-m-Y') }}
                </div>

            </div>
            <div class="flex items-center gap-10 justify-center">
                <a  href="{{ route('admin.posts.edit' , $post->id) }}" class="py-2 px-8 bg-blue-500 text-white hover:bg-blue-600 rounded">
                    <button> Sửa </button>
                </a>
                <a  href="{{ route('admin.posts.delete' , $post->id) }}" class="py-2 px-8 bg-red-500 text-white hover:bg-red-600 rounded">
                    Xóa
                </a>
            </div>
        @endif
    </div>
@endsection


