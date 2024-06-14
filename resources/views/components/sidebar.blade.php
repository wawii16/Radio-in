    <!-- Sidebar -->
    <aside class="w-56 bg-neutral-900 h-screen">
        <div class="flex flex-col h-full">
            <div class="flex items-center justify-center py-4 mb-3 mt-5">
                <div class="w-40 h-20 -ms-5">
                    <img class="w-full rounded-xl object-cover" src={{asset ('logo.png')}} alt="logo">
                </div>
            </div>
            <nav class="text-white flex-1 mt-4">
                <ul>
                    <li class="mb-2">
                        {{-- <img src={{asset ('/icons/home-icon.png') }} alt="home-icon"> --}}
                        {{-- <i class="fa-regular fa-house"></i> --}}
                        <a href="/" class="block py-2 px-4 hover:bg-gray-700">Beranda</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-4 hover:bg-gray-700">Cari</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-4 hover:bg-gray-700">Radio</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="block py-2 px-4 hover:bg-gray-700">Podcast</a>
                    </li>
                    <li class="mb-2">
                        <a href="/admin" class="block py-2 px-4 hover:bg-gray-700">Admin</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>