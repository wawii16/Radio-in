<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar and Sidebar with Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body class="flex bg-gray-100 min-h-screen">

    <!-- Sidebar -->
    <aside class="w-56 bg-neutral-900 min-h-screen flex flex-col justify-between">
        <div class="flex flex-col h-full">
            <div class="flex items-center justify-center py-4 mb-3 mt-5">
                <div class="w-40 h-20">
                    <img class="w-full rounded-xl object-cover" src="{{ asset('/images/logo.png') }}" alt="logo">
                </div>
            </div>
            <nav class="text-white flex-1 mt-4">
                <ul>
                    <li class="mb-2">
                        <a href="/" class="block py-2 px-4 hover:bg-gray-700">Beranda</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" id="search-link" class="block py-2 px-4 hover:bg-gray-700">Cari</a>
                    </li>
                    <li class="mb-2">
                        <a href="/radio" class="block py-2 px-4 hover:bg-gray-700">Radio</a>
                    </li>
                    <li class="mb-2">
                        <a href="/podcast" class="block py-2 px-4 hover:bg-gray-700">Podcast</a>
                    </li>
                    <li class="mb-2">
                        <a href="/berita" class="block py-2 px-4 hover:bg-gray-700 {{ request()->is('berita') ? 'bg-yellow-300 text-black' : '' }}">Berita</a>
                    </li>
                    <li class="mb-2">
                        <a href="/admin" class="block py-2 px-4 hover:bg-gray-700">Admin</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden bg-black">
        <!-- Navbar -->
        <nav class="bg-neutral-900 p-4 mx-3 rounded-md">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Search Bar -->
                <div class="relative w-50 max-w-md mx-4">
                    <input type="text" id="search-bar" placeholder="Search..." class="w-full p-2 pl-10 pr-4 rounded-lg border border-neutral-800 focus:outline-none focus:ring-2 focus:ring-neutral-400 focus:border-transparent bg-neutral-700 text-white">
                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.7-5.15a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <ul class="flex space-x-4 me-5">
                        <li><a href="#" class="text-gray-300 hover:text-yellow-300">Buat Kamu</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-yellow-300">About</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-yellow-300">Event</a></li>
                        <li><a href="/login" class="text-black hover:bg-yellow-500 bg-yellow-300 font-bold py-3 px-5 rounded-3xl">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Main Content --}}
        <main class="container mx-auto mt-2 p-4">
            <section class="grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1">
                <!-- Berita 1 -->
                <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg flex">
                    <a href="/berita" class="flex-shrink-0 w-1/5">
                        <img class="w-full h-full object-cover max-w-xs" src="{{ asset ('images/berita-logo.png') }}" alt="News Image">
                    </a>
                    <div class="p-6 flex flex-col w-full">
                        <h3 class="text-xl font-bold mb-4">Judul Berita Pertama</h3>
                        <p class="text-gray-300 mb-4">Deskripsi singkat dari berita pertama. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="mt-auto">
                            <a href="/berita" class="w-full bg-yellow-300 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded">Baca Selengkapnya...</a>
                        </div>
                    </div>
                </div>

                <!-- Berita 2 -->
                <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg flex">
                    <a href="/berita" class="flex-shrink-0 w-1/5">
                        <img class="w-full h-full object-cover max-w-xs" src="{{ asset ('images/berita-logo.png') }}" alt="News Image">
                    </a>
                    <div class="p-6 flex flex-col w-full">
                        <h3 class="text-xl font-bold mb-4">Judul Berita Kedua</h3>
                        <p class="text-gray-300 mb-4">Deskripsi singkat dari berita kedua. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="mt-auto">
                            <a href="/berita" class="w-full bg-yellow-300 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded">Baca Selengkapnya...</a>
                        </div>
                    </div>
                </div>
                <!-- Berita 3 -->
                <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg flex">
                    <a href="/berita" class="flex-shrink-0 w-1/5">
                        <img class="w-full h-full object-cover max-w-xs" src="{{ asset ('images/berita-logo.png') }}" alt="News Image">
                    </a>
                    <div class="p-6 flex flex-col w-full">
                        <h3 class="text-xl font-bold mb-4">Judul Berita Ketiga</h3>
                        <p class="text-gray-300 mb-4">Deskripsi singkat dari berita ketiga. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="mt-auto">
                            <a href="/berita" class="w-full bg-yellow-300 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded">Baca Selengkapnya...</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>   
    </div>

    <script>
        // JavaScript to focus the search bar when "Cari" is clicked
        document.getElementById('search-link').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('search-bar').focus();
        });
    </script>

</body>

</html>