@extends('layouts.admin')
@section('title','Dashboard - Thêm giới thiệu')
@section('content')
    <div class="bg-white m-10 rounded-lg min-h-screen p-10">
        <div class="flex justify-between items-center">
            <div class="text-xl font-semibold text-purple-700">Thêm {{ $type }}</div>
            <button class="text-white px-4 py-2 bg-green-500 rounded hover:bg-green-600" onclick="history.back()" type="submit">Quay về</button>
        </div>
        <div class="mt-10">
            <div class="">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="type" value="{{$type}}">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                @if($type == 'history')
                                    <div class="col-span-3 sm:col-span-2">
                                        <label class="block text-sm font-medium text-gray-700">
                                            Thời gian
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm w-full">
                                            <input type="number" min="2015"  name="time" value="{{ date("Y")}}" class="border border-gray-200 focus:ring-2 focus:outline-none focus:border-blue-400 rounded p-2 w-full "  >
                                        </div>
                                    </div>
                                @endif
                                <div class="w-full">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label class="block text-sm font-medium text-gray-700">
                                            Tiêu đề
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm w-full">
                                            <input type="text" name="title"  class="border border-gray-200 focus:ring-2 focus:outline-none focus:border-blue-400 rounded p-2 w-full "  placeholder="Tiêu đề ...">
                                        </div>
                                    </div>
                                </div>
                                @if($type != 'slogan')
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Nội dung
                                        </label>
                                        <div class="mt-1">
                                            <textarea name="content" rows="5"  class="border border-gray-200 focus:ring-2 focus:outline-none focus:border-blue-400 rounded p-2 w-full"  placeholder="Nội dung ..."></textarea>
                                        </div>
                                    </div>
                                    @if($type != 'core_value' && $type != 'history')
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            Thêm hình ảnh
                                        </label>
                                        <input type="file" name="image">
                                    </div>
                                    @endif

                                @endif
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Thêm
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
