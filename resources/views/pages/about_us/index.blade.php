@extends('layouts.app')
@section('title', 'Funtap - Về chúng tôi')
@section('content')
    <div class="bg-gray-100 pt-16 ">
        <div class="lg:grid lg:grid-cols-4 lg:gap-6 px-4 md:px-[13%]">
            @if($about->where('type','slogan')->count() > 0)
            <div class="col-span-2">
                <div class="text-xl text-orange-600 font-semibold">Sologan</div>
                <div class="text-4xl py-4 text-gray-800 font-bold uppercase">{{ $about->where('type','slogan')->first()->title ?? null}}</div>
            </div>
            @endif

            @if($about->where('type','core_value')->count() > 0)
                @foreach($about->where('type','core_value')->all() as $coreValue )
                    <div class="">
                        <div class="text-xl text-orange-600 font-semibold">{{$coreValue->title}}</div>
                        <div class=" py-4 text-gray-600">{{$coreValue->content}}</div>
                    </div>
                @endforeach
            @endif
        </div>

        @if( $about->where('type','content')->count() > 0)
            <div class="grid grid-cols-2 xl:grid-cols-4 mt-14 bg-white px-4 md:px-0 md:mx-[13%]">
                <?php $i =0 ?>
                @foreach( $about->where('type','content')->all() as $contentAbout )
                    <?php $i += 1 ?>
                    @if($i%4 == 1 || $i%4 == 2)
                        <div>
                            <img  class="scale-full hover:scale-125 ease-in duration-500 w-full" src="{{ $contentAbout->image}}" alt="">
                        </div>
                    @endif
                    <div class="p-6">
                        <div class="text-2xl font-bold ">{{ $contentAbout->title }}</div>
                        <p class="text-gray-500 pt-4 text-[15px]">{{$contentAbout->content}}</p>
                    </div>
                    @if($i%4 == 0 || $i%4 == 3)
                        <div>
                            <img  class="scale-full hover:scale-125 ease-in duration-500 w-full" src="{{ $contentAbout->image}}" alt="">
                        </div>
                    @endif
                    @endforeach

            </div>
        @endif

        @if($about->where('type','content')->count() > 0)
            <div class="bg-orange-600 mt-14  py-14">
                <div class="text-4xl font-semibold text-white text-center uppercase">Thành tựu nổi bật</div>
                <hr class="h-2 w-[50px] mx-auto bg-white mt-8 rounded-full">
                <div class="px-4 px-[13%] pt-8">
                    <ol class="relative border-l border-gray-200 ">
                        @foreach($about->where('type','history')->all() as $key => $history )
                        <li class="mb-10 ml-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white "></div>
                            <time class="mb-1 text-2xl font-bold leading-none text-gray-50 ">{{ $history->time }}</time>
                            <h3 class="text-lg font-semibold text-white ">{{ $history->title }}</h3>
                            <p class="mb-4 text-base font-normal text-white">{{ $history->content }}.</p>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        @endif
    </div>


@endsection
