<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- Sidebar -->
<aside class="w-56 bg-neutral-900 min-h-screen">
    <div class="flex flex-col h-full">
        <div class="flex items-center justify-center py-4 mb-3 mt-5">
            <div class="w-40 h-20 -ms-5">
                <img class="w-full rounded-xl object-cover" src={{asset ('logo.png')}} alt="logo">
            </div>
        </div>
        <nav class="text-white flex-1 mt-4">
            <ul>
                <li class="mb-2 flex items-center">
                    <a href="/" class="gap-20 w-full block py-2 px-4 hover:bg-gray-700 {{ request()->is('/') ? 'bg-yellow-300 text-black' : '' }}"> <i class="fa-solid fa-house mr-3"></i>Beranda</a>
                </li>

                <li class="mb-2 flex items-center">
                    <a href="#" id="search-link" class="w-full block py-2 px-4 hover:bg-gray-700"><i class="fa-solid fa-magnifying-glass mr-3"></i>Cari</a>
                </li>
                <li class="mb-2 flex items-center">
                    <a href="/radio" class="w-full block py-2 px-4 hover:bg-gray-700 {{ request()->is('radio') ? 'bg-yellow-300 text-black' : '' }}"> <i class="fa-solid fa-radio mr-3"></i>Radio</a>
                </li>
                <li class="mb-2 flex items-center">
                    <a href="/podcast" class="w-full block py-2 px-4 hover:bg-gray-700 {{ request()->is('podcast') ? 'bg-yellow-300 text-black' : '' }}"><i class="fa-solid fa-podcast mr-3"></i>Podcast</a>
                </li>
                <li class="mb-2 flex items-center">
                    <a href="/berita" class="w-full block py-2 px-4 hover:bg-gray-700 {{ request()->is('berita') ? 'bg-yellow-300 text-black' : '' }}"><i class="fa-solid fa-newspaper mr-3"></i>Berita</a>
                </li>
                @if(auth()->check() && auth()->user()->isAdmin())

                <li class="mb-2 flex items-center">
                    <a href="/admin" class="w-full block py-2 px-4 hover:bg-gray-700 {{ request()->is('admin') ? 'bg-yellow-300 text-black' : '' }}"><i class="fa-solid fa-user-tie mr-3"></i>Admin</a>
                </li>
                @endif

            </ul>

        </nav>
    </div>
</aside>