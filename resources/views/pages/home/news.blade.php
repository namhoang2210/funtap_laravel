<div class=" bg-white px-[15%]">
    <div class="text-4xl font-semibold text-gray-800 text-center pt-14 uppercase">Tin tức - Sự kiện</div>
    <hr class="h-2 w-[50px] mx-auto bg-[#ef4723] mt-8 rounded-full">
    <div class="py-10 grid lg:grid-cols-3 gap-6">
        @if($new_posts)
            @foreach($new_posts as $post)
                <div class="">
                    <div class="border-2 border-gray-200 rounded-lg mb-4">
                        <img class="object-cover object-center w-full lg:h-48 md:h-36"
                             src=" {{$post->image }}" alt="blog">
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
        @endif
    </div>
</div>
