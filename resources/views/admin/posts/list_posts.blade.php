<div class="w-full">
        <div class="border-b m-10 border-gray-200 shadow">
            @if($posts->count() == 0)
                <h1 class="text-center text-xl text-gray-800 py-10">Chưa có bài đăng !!!</h1>
            @else
            <table class="w-full table-auto">
                <thead class="bg-gray-50 whitespace-nowrap">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500 w-24">
                            ID
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
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
                        <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-gray-500 text-center">
                            {{ $key+1 }}
                        </td>
                        <td class="px-6 py-4">
                            <button class="text-sm text-gray-900 font-medium text-blue-600 ">
                                <a href="">{{ $post->title ?? null }}</a>
                            </button>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="text-sm text-gray-500">{{ $post->created_at ?? "__/__/____" }}</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 text-center">
                            {{ $post->updated_at ?? "__/__/____" }}
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
            @endif
        </div>
    </div>
