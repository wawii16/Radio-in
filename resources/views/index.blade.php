<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                    @foreach ($radios->take(3) as $radio)
                    <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                        <a href="/radio/{{ $radio->id }}">
                            <img class="w-full h-64 object-cover" src="{{ url('/') }}/uploads/{{ $radio->photo }}" alt="Radio Image">
                        </a>
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">{{ $radio->name }}</h3>
                            <p>{{ $radio->artist }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-6">
                    <a href="/radio" class="bg-yellow-300 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded">Selengkapnya...</a>
                </div>
            </section>

            <!-- Section 2: Podcast -->
            <section class="mb-8">
                <h2 class="text-2xl font-bold text-white mb-4">Temukan Podcast Favorit Anda!</h2>
                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($podcasts->take(3) as $podcast)
                    <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                        <a href="/podcast/{{ $podcast->id }}">
                            <img class="w-full h-64 object-cover" src="{{ url('/') }}/uploads/{{ $podcast->photo }}" alt="Podcast Image">
                        </a>
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">{{ $podcast->name }}</h3>
                            <p>{{ $podcast->artist }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-6">
                    <a href="/podcast" class="bg-yellow-300 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded">Selengkapnya</a>
                </div>
            </section>

            <!-- Section 3: Portal Berita -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4">Portal Berita Terkini!</h2>
                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
                    @foreach ($beritas->take(2) as $berita)
                    <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                        <a href="/berita">
                            <img class="w-full h-64 object-cover" src="{{ url('/') }}/uploads/{{ $berita->photo }}" alt="News Image">
                        </a>
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">{{ $berita->judul }}</h3>
                            <p class="text-gray-300">{{ $berita->deskripsi }}</p>
                        </div>
                    </div>
                    @endforeach
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