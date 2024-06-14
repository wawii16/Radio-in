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
                    <img class="w-full rounded-xl object-cover" src="{{ asset('logo.png') }}" alt="logo">
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

    <div class="flex-1 flex flex-col overflow-hidden bg-black">
        <!-- Navbar -->
        <nav class="bg-neutral-900 p-4 mx-3 rounded-md">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Search Bar -->
                <div class="relative w-50 max-w-md mx-4">
                    <input type="text" placeholder="Search..." class="w-full p-2 pl-10 pr-4 rounded-lg border border-neutral-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-neutral-700 ">
                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.7-5.15a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <ul class="flex space-x-4 me-5">
                        <li class="hover:bg-gray-700"><a href="#" class="text-gray-300 ">Buat Kamu</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">About</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Event</a></li>
                        <li><a href="#" class="text-black hover:bg-yellow-500 bg-yellow-300 font-bold py-3 px-5 rounded-3xl">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="max-w-full mt-3 mx-3 p-5 bg-neutral-900 text-white rounded-lg shadow overflow-hidden">
            <section class="mb-6">
                <h2 class="text-lg font-semibold mb-5">Tabel CRUD Admin</h2>
                <div class="max-w-4xl mx-auto bg-neutral-700 shadow overflow-hidden">
                    <table class="min-w-full bg-neutral-700">
                        <thead class="text-white">
                            <tr>
                                <th class="w-10 py-3 px-4 text-left font-medium uppercase border-b border-neutral-800">No</th>
                                <th class="py-3 px-4 text-left font-medium uppercase border-b border-neutral-800">Nama Layanan</th>
                                <th class="py-3 px-4 text-left font-medium uppercase border-b border-neutral-800">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-800">
                            <tr>
                                <td class="w-10 py-3 px-4 whitespace-nowrap border-b border-neutral-800">1.</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800">Radio</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800">
                                    <button class="bg-yellow-300 hover:bg-yellow-500 text-black font-bold py-1 px-3 rounded">Lihat</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-10 py-3 px-4 whitespace-nowrap border-b border-neutral-800">2.</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800">Podcast</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800">
                                    <button class="bg-yellow-300 hover:bg-yellow-500 text-black font-bold py-1 px-3 rounded">Lihat</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-10 py-3 px-4 whitespace-nowrap border-b border-neutral-800">3.</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800">Berita</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800">
                                    <button class="bg-yellow-300 hover:bg-yellow-500 text-black font-bold py-1 px-3 rounded">Lihat</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
        

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