@extends('layouts.admin')
@section('title','Dashboard - Bài đăng')
@section('content')
    <div class="bg-white m-10 rounded-lg min-h-screen p-10">
        <div class="flex justify-between items-center">
            <div class="text-xl font-semibold text-purple-700">Danh sách bài đăng</div>
            <a>
                <button class="text-white px-4 py-2 bg-green-500 rounded hover:bg-green-600">Thêm bài viết</button>
            </a>
        </div>
        @include('admin.posts.list_posts')
    </div>
@endsection
