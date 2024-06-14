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
    <x-Sidebar></x-Sidebar>

    <div class="flex-1 flex flex-col overflow-hidden bg-black">
        <!-- Navbar -->
        <x-Navbar></x-Navbar>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-6 bg-black">
            <!-- Radio Player -->
            <div class="max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg mb-6">
                <img class="w-full h-64 object-cover" src={{asset ('zeno-logo.png') }} alt="Album Art">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-2">Zeno Radio</h3>
                    <p class="text-gray-600">Various Artists</p>
                    <div class="flex items-center mt-4">
                        <button id="playPauseButton" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Play
                        </button>
                        <div class="flex-1 ml-4">
                            <label for="">Volume Control</label>
                            <input type="range" id="volumeControl" min="0" max="1" step="0.01" class="w-full bg-gray-300 h-1 rounded-lg overflow-hidden appearance-none">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- JavaScript untuk Pemutar Radio -->
    <script src={{asset ('js/app.js')}}></script>
</body>

</html>