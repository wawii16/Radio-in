<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body class="flex bg-gray-100 min-h-screen">

    <!-- Sidebar -->
    <x-Sidebar></x-Sidebar>

    <!-- Main Content -->
    <div id="main-content" class="flex-1 flex flex-col overflow-hidden bg-white transition-all duration-300 ml-0">
        <!-- Navbar -->
        <x-Navbar></x-Navbar>

        <!-- Podcast Player -->
        @auth
        <main class="flex-1 overflow-y-auto p-6 bg-white">
            <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">Saluran Podcast</h2>
            <section class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($podcasts as $podcast)
                <div class="max-w-lg mx-auto bg-emerald-700 border border-emerald-700 text-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-64 object-cover" src="{{ url('/') }}/uploads/{{ $podcast->photo }}" alt="Album Art">
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">{{ $podcast->name }}</h3>
                        <p class="">{{ $podcast->artis }}</p>
                        <div class="flex items-center mt-4">
                            <button id="playPauseButton{{ $podcast->id }}" class="bg-emerald-900 hover:bg-emerald-800 text-white font-bold py-2 px-4 rounded-md" data-url="{{ $podcast->url }}">
                                Play
                            </button>
                            <div class="flex-1 ml-4">
                                <label for="volumeControl{{ $podcast->id }}" class="text-white">Volume Control</label>
                                <input type="range" id="volumeControl{{ $podcast->id }}" min="0" max="1" step="0.01" class="w-full bg-gray-300 h-1 rounded-lg overflow-hidden appearance-none">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </section>
        </main>
        @else
        <p class="text-emerald-700 font-bold mx-auto my-10">Anda Harus Login</p>

        @endauth

    </div>

    <!-- JavaScript untuk Pemutar Podcast -->
    <script src={{asset ('js/app.js')}}></script>

</body>

</html>