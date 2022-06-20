@extends('layouts.admin')
@section('title','Dashboard - Bài đăng')
@section('content')
    <div class="bg-white m-10 rounded-lg min-h-[450px] p-10">
        @if (Session::has('success'))
            <div class="text-center w-full text-white py-3 mb-10 rounded bg-green-600">{{ Session::get('success') }}</div>
        @endif
        <div class="flex justify-between items-center">
            <div class="text-xl font-semibold text-purple-700">Danh sách bài đăng</div>
            <a href="{{ route('admin.posts.loadFormCreate') }}">
                <button class="text-white px-4 py-2 bg-green-500 rounded hover:bg-green-600">Thêm bài viết</button>
            </a>
        </div>

        <div class="w-full">
            <div class="border-b m-10 border-gray-200 shadow">
                @if($posts->count() == 0)
                    <h1 class="text-center text-xl text-gray-800 py-10">Chưa có bài đăng !!!</h1>
                @else
                    <table class="w-full table-auto">
                        <thead class="bg-gray-100 whitespace-nowrap">
                        <tr>
                            <th class="px-6 py-4 text-xs text-gray-500 w-24">
                                ID
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500 max-w-[130px]">
                                Tiêu đề
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Thời gian tạo
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Thời gian sửa
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500 w-24">
                                Chỉnh sửa
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500 w-24">
                                Xóa
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        @foreach($posts as $key => $post)
                            <tr class="whitespace-nowrap @if($key % 2 == 1) bg-gray-100 @endif">
                                <td class="px-6 py-4 text-sm text-gray-500 text-center">
                                    {{ $key+1 }}
                                </td>
                                <td class="px-6 py-4 max-w-[300px] truncate">
                                    <button class="text-sm text-gray-900 font-medium text-blue-600">
                                        <a href="">{{ $post->title ?? null }}</a>
                                    </button>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-500">
                                        {{ $post->created_at === null ? '' : $post->created_at->format('H:i:s - m/d/Y') }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 text-center">
                                    {{ $post->updated_at === null || $post->updated_at == $post->created_at ? '' : $post->updated_at->format('H:i:s - m/d/Y') }}
                                </td>
                                <td class="px-6 py-4 flex justify-center">
                                    <a href="#" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mx-10">{{ $posts->links() }}</div>
            @endif
        </div>
    </div>
@endsection
