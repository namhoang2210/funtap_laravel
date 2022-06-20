@extends('layouts.app')
@section('title', 'Funtap - Tin tức & Sự kiện')
@section('content')
    <div class="bg-gray-100 py-16">
        @if($posts->count() == 0)
            <h1 class="text-center text-xl text-gray-800 py-10">Chưa có bài đăng !!!</h1>
        @else
            @foreach ($posts as $post)
                <h1>{{ $post->title}}</h1>
                <p>{{ $post->content}}</p>
            @endforeach
        @endif
    </div>
@endsection
