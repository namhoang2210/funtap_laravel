@extends('layouts.app')
@section('title', 'Funtap - Tin tức & Sự kiện')
@section('content')
    <div class="bg-gray-100 py-16">
        @foreach ($posts as $post)
            <h1>{{ $post->title}}</h1>
            <p>{{ $post->content}}</p>
        @endforeach
    </div>
@endsection
