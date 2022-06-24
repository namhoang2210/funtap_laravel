<header>
    <nav class=" lg:px-[13%] flex flex-wrap items-center justify-between w-full py-4 md:py-2 px-4 md:px-10 text-lg text-gray-700 bg-white">
        <div>
            <a href="{{ route('home') }}">
                <img class="h-12" src="{{ asset('img/logo.webp') }}" alt="">
            </a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="md:hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <div class="hidden w-full md:flex md:items-center md:w-auto text-[17px] font-semibold " id="menu">
            <ul class="pt-4 text-gray-700 md:flex md:justify-between md:pt-0">
                <li>
                    <a class="md:p-4 py-2 block hover:text-orange-600" href="{{route('about')}}">Về chúng tôi</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-orange-600" href="{{route('news.list')}}">Tin tức</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-orange-600" href="https://playfun.vn/">Games</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-orange-600" href="#">Tuyển dụng</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-orange-600" href="#">Liên hệ</a>
                </li>
                <li class="flex items-center gap-1 md:ml-8 py-2">
                    <div>Tìm kiếm</div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    const button = document.querySelector('#menu-button');
    const menu = document.querySelector('#menu');


    button.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>

