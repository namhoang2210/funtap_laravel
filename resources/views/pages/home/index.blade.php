@extends('layouts.app')
@section('title', 'Funtap - Trang chủ')
@section('content')
    <div class="bg-gray-100 py-16">
        @include('pages.home.about')
        @include('pages.home.service')
        @include('pages.home.product')
        @include('pages.home.news')
        @include('pages.home.jobs')
    </div>
@endsection