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
                        <a href="#" class="block py-2 px-4 hover:bg-gray-700">Cari</a>
                    </li>
                    <li class="mb-2">
                        <a href="/radio" class="block py-2 px-4 hover:bg-gray-700">Radio</a>
                    </li>
                    <li class="mb-2">
                        <a href="/podcast" class="block py-2 px-4 hover:bg-gray-700 {{ request()->is('podcast') ? 'bg-yellow-300 text-black' : '' }}">Podcast</a>
                    </li>
                    <li class="mb-2">
                        <a href="/berita" class="block py-2 px-4 hover:bg-gray-700">Berita</a>
                    </li>
                    <li class="mb-2">
                        <a href="/admin" class="block py-2 px-4 hover:bg-gray-700">Admin</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden bg-black">
        <!-- Navbar -->
        <nav class="bg-neutral-900 p-4 mx-3 rounded-md">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Search Bar -->
                <div class="relative w-50 max-w-md mx-4">
                    <input type="text" placeholder="Search..." class="w-full p-2 pl-10 pr-4 rounded-lg border border-neutral-800 focus:outline-none focus:ring-2 focus:ring-neutral-400 focus:border-transparent bg-neutral-700 text-white">
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

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-6 bg-black">
            <!-- Radio Player -->
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                <!-- Player 1 -->
                <div class="max-w-lg mx-auto bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-64 object-cover" src="{{asset ('/images/podcast-logo.png') }}" alt="Album Art">
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">Podcast</h3>
                        <p class="">Podcast</p>
                        <div class="flex items-center mt-4">
                            <button id="playPauseButton" class="bg-yellow-300 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded">
                                Play
                            </button>
                            <div class="flex-1 ml-4">
                                <label for="volumeControl" class="text-white">Volume Control</label>
                                <input type="range" id="volumeContro" min="0" max="1" step="0.01" class="w-full bg-gray-300 h-1 rounded-lg overflow-hidden appearance-none">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Player 2 -->
                <div class="max-w-lg mx-auto bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-64 object-cover" src="{{asset ('/images/podcast-logo.png') }}" alt="Album Art">
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">Podcast</h3>
                        <p class="">Podcast</p>
                        <div class="flex items-center mt-4">
                            <button id="playPauseButton" class="bg-yellow-300 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded">
                                Play
                            </button>
                            <div class="flex-1 ml-4">
                                <label for="volumeControl">Volume Control</label>
                                <input type="range" id="volumeControl" min="0" max="1" step="0.01" class="w-full bg-gray-300 h-1 rounded-lg overflow-hidden appearance-none">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Player 3 -->
                <div class="max-w-lg mx-auto bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-64 object-cover" src="{{asset ('/images/podcast-logo.png') }}" alt="Album Art">
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">Podcast</h3>
                        <p class="">Podcast</p>
                        <div class="flex items-center mt-4">
                            <button id="playPauseButton" class="bg-yellow-300 hover:bg-yellow-500 text-black font-bold py-2 px-4 rounded">
                                Play
                            </button>
                            <div class="flex-1 ml-4">
                                <label for="volumeControl">Volume Control</label>
                                <input type="range" id="volumeControl" min="0" max="1" step="0.01" class="w-full bg-gray-300 h-1 rounded-lg overflow-hidden appearance-none">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- JavaScript untuk Pemutar Radio -->
    <script>
        const playPauseButton = document.getElementById('playPauseButton');
        const radioPlayer = new Audio('https://stream.zeno.fm/dgtzdngnd0huv');
        const volumeControl = document.getElementById('volumeControl');

        playPauseButton.addEventListener('click', () => {
            if (radioPlayer.paused) {
                radioPlayer.play();
                playPauseButton.textContent = 'Pause';
            } else {
                radioPlayer.pause();
                playPauseButton.textContent = 'Play';
            }
        });

        volumeControl.addEventListener('input', () => {
            radioPlayer.volume = volumeControl.value;
        });
    </script>
</body>

</html>