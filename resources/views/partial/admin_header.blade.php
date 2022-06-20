<header>
    <nav class="flex flex-wrap items-center justify-between w-full py-4 md:py-0 px-10 text-lg text-gray-700 bg-white">
        <div class="text-purple-500 text-lg font-semibold flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
            </svg>
            <a href="{{ route('admin.index') }}">
              Dashboard
            </a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="md:hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
            <ul class="pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0">
                <li>
                    <a class="md:p-4 py-2 block hover:text-purple-400" href="{{ route('admin.posts.show') }}">Bài đăng</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-purple-400" href="#">Games</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-purple-400" href="#">Tuyển dụng</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-purple-400" href="#">Features</a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-purple-400 text-purple-500 md:ml-8 flex items-center gap-1" href="#">
                        <div>Đăng xuất</div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </a>
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
