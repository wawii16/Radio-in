<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar and Sidebar with Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-gray-100 min-h-screen">

    <!-- Sidebar -->
    <aside class="w-56 bg-gray-800 h-screen">
        <div class="flex flex-col h-full">
            <div class="flex items-center justify-center py-4">
                <div class="text-white text-lg font-bold">Logo</div>
            </div>
            <nav class="text-white flex-1">
                <ul>
                    <li class="mb-2"><a href="#" class="block py-2 px-4 hover:bg-gray-700">Dashboard</a></li>
                    <li class="mb-2"><a href="#" class="block py-2 px-4 hover:bg-gray-700">Profile</a></li>
                    <li class="mb-2"><a href="#" class="block py-2 px-4 hover:bg-gray-700">Settings</a></li>
                    <li class="mb-2"><a href="#" class="block py-2 px-4 hover:bg-gray-700">Logout</a></li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden bg-black">
        <!-- Navbar -->
        <nav class="bg-gray-800 p-4 mx-3 rounded-md ">
            <div class="container mx-auto flex justify-between items-center">
                <div class="text-white text-lg font-bold">Navbar</div>
                <ul class="flex space-x-4">
                    <li class="hover:bg-gray-700"><a href="#" class="text-gray-300 ">Home</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">About</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Services</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Contact</a></li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-6 bg-black">
            <!-- Radio Player -->
            <div class="max-w-lg mx-auto bg-white rounded-lg overflow-hidden shadow-lg mb-6">
                <img class="w-full h-64 object-cover" src="https://via.placeholder.com/600x300" alt="Album Art">
                <div class="p-4">
                    <h3 class="text-lg font-bold mb-2">Radio Title</h3>
                    <p class="text-gray-600">Artist Name</p>
                    <div class="flex items-center mt-4">
                        <button id="playPauseButton" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Play
                        </button>
                        <div class="flex-1 ml-4">
                            <input type="range" id="volumeControl" min="0" max="1" step="0.01" class="w-full bg-gray-300 h-1 rounded-lg overflow-hidden appearance-none">
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