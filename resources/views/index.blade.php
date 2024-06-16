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

    {{-- Sidebar Component --}}
    <x-Sidebar></x-Sidebar>

    <div id="main-content" class="flex-1 flex flex-col overflow-hidden bg-black transition-all duration-300 ml-0">
        <!-- Navbar -->
        <x-Navbar></x-Navbar>

        {{-- Main Content --}}
        <!-- Dashboard Content -->
        <main class="p-6">
            @auth
            <h1 class="text-4xl font-bold text-yellow-300 mb-5">Selamat Datang, {{ Auth::user()->name }}</h1>
            @else
            <h1 class="text-4xl font-bold text-yellow-300 mb-5">Selamat Datang, Anda Harus Login</h1>
            @endauth
            <!-- Section 1: Radio -->
            <section class="mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">Temukan Channel Radio Favorit Anda!</h2>
                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Radio Card 1 -->
                    <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                        <a href="/radio">
                            <img class="w-full h-64 object-cover" src="{{ asset ('images/zeno-logo.png') }}" alt="Radio Image">
                        </a>
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">Zeno Radio</h3>
                            <p class="">Various Artists</p>
                        </div>
                    </div>
                    <!-- Radio Card 2 -->
                    <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                        <a href="/radio">
                            <img class="w-full h-64 object-cover" src="{{ asset ('images/zeno-logo.png') }}" alt="Radio Image">
                        </a>
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">Zeno Radio</h3>
                            <p class="">Various Artists</p>
                        </div>
                    </div>
                    <!-- Radio Card 3 -->
                    <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                        <a href="/radio">
                            <img class="w-full h-64 object-cover" src="{{ asset ('images/zeno-logo.png') }}" alt="Radio Image">
                        </a>
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">Zeno Radio</h3>
                            <p class="">Various Artists</p>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="/radio" class="bg-yellow-300 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded">Selengkapnya...</a>
                </div>
            </section>

            <!-- Section 2: Podcast -->
            <section class="mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">Temukan Podcast Favorit Anda!</h2>
                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                        <a href="/podcast">
                            <img class="w-full h-64 object-cover" src="{{ asset ('images/podcast-logo.png') }}" alt="Podcast Image">
                        </a>
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">Interesting Podcast</h3>
                            <p class="">Various Speakers</p>
                        </div>
                    </div>
                    <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                        <a href="/podcast">
                            <img class="w-full h-64 object-cover" src="{{ asset ('images/podcast-logo.png') }}" alt="Podcast Image">
                        </a>
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">Interesting Podcast</h3>
                            <p class="">Various Speakers</p>
                        </div>
                    </div>
                    <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                        <a href="/podcast">
                            <img class="w-full h-64 object-cover" src="{{ asset ('images/podcast-logo.png') }}" alt="Podcast Image">
                        </a>
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">Interesting Podcast</h3>
                            <p class="">Various Speakers</p>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="/podcast" class="bg-yellow-300 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded">Selengkapnya</a>
                </div>
            </section>

            <!-- Section 3: Portal Berita -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4">Portal Berita Terkini!</h2>
                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-2">
                    {{-- Berita 1 --}}
                    <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg flex">
                        <a href="/berita" class="flex-shrink-0 w-1/3">
                            <img class="w-full h-full object-cover max-w-xs" src="{{ asset ('images/berita-logo.png') }}" alt="News Image">
                        </a>
                        <div class="p-6 flex flex-col w-full">
                            <h3 class="text-xl font-bold mb-4">News Title</h3>
                            <p class="text-white mb-4 text-justify text-ellipsis overflow-hidden">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, voluptatem quae, veritatis recusandae cupiditate quia veniam ea, perspiciatis asperiores repellat eos fuga? Debitis illum dolor laborum laboriosam, natus obcaecati dignissimos!
                            </p>
                        </div>
                    </div>
                    {{-- Berita 2 --}}
                    <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg flex">
                        <a href="/berita" class="flex-shrink-0 w-1/3">
                            <img class="w-full h-full object-cover max-w-xs" src="{{ asset ('images/berita-logo.png') }}" alt="News Image">
                        </a>
                        <div class="p-6 flex flex-col w-full">
                            <h3 class="text-xl font-bold mb-4">News Title</h3>
                            <p class="text-white mb-4 text-justify text-ellipsis overflow-hidden">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, voluptatem quae, veritatis recusandae cupiditate quia veniam ea, perspiciatis asperiores repellat eos fuga? Debitis illum dolor laborum laboriosam, natus obcaecati dignissimos!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="/berita" class="bg-yellow-300 hover:bg-yellow-500 text-black font-semibold py-3 px-6 rounded">Selengkapnya</a>
                </div>
            </section>
        </main>
    </div>
    
    <script src={{asset ('js/app.js')}}></script>

</body>

</html>