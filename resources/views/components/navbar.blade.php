<nav class="bg-neutral-900 p-4 mx-3 rounded-md">
    <div class="container mx-auto flex justify-between items-center">
        <div class="relative w-full max-w-md mx-4">
            <input id="search-bar" type="text" placeholder="Search..." class="w-full p-2 pl-10 pr-12 rounded-lg border border-neutral-800 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent bg-neutral-700 text-white">
            <button type="button" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-yellow-300 font-bold text-black px-4 py-2 rounded-md hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                Search
            </button>
            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
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
                @auth
                <li><a href="/logout" class="text-black hover:bg-yellow-500 bg-yellow-300 font-bold py-3 px-5 rounded-3xl">Logout</a></li>

                @else
                <li><a href="/login" class="text-black hover:bg-yellow-500 bg-yellow-300 font-bold py-3 px-5 rounded-3xl">Login</a></li>

                @endauth
            </ul>
        </div>

    </div>
</nav>