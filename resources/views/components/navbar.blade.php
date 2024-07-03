<nav id="navbar" class="bg-emerald-700 p-4 mx-3 rounded-md flex flex-col gap-2 shadow-lg md:flex-row md:items-center md:justify-between">
    <div class="relative max-w-sm mx-auto md:mx-0 md:w-1/2">
        <input id="search-bar" type="text" placeholder="Search..." class="w-full p-2 pl-10 pr-12 rounded-lg border border-emerald-900 focus:outline-none focus:ring-2 focus:ring-emerald-600 focus:border-transparent bg-white text-black" onkeyup="searchContent()">
        <button type="button" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-emerald-500 font-bold text-white px-4 py-2 rounded-md hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-600">
            Search
        </button>
        <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m1.7-5.15a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
        <ul id="search-results" class="absolute mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-lg hidden"></ul>
    </div>

    <ul class="flex justify-center mt-4 md:mt-0 md:ml-4 space-x-4">
        <li><a href="/about" class="text-white font-bold">About Us</a></li>
        @auth
        <li><a href="/logout" class="text-white hover:bg-emerald-600 bg-emerald-500 font-bold py-3 px-5 rounded-3xl">Logout</a></li>
        @else
        <li><a href="/login" class="text-white hover:bg-emerald-600 bg-emerald-500 font-bold py-3 px-5 rounded-3xl">Login</a></li>
        @endauth
    </ul>
</nav>

<script>
    let currentFocus = -1;

    async function searchContent() {
        const query = document.getElementById('search-bar').value;
        const resultsContainer = document.getElementById('search-results');

        if (query.length > 1) {
            const response = await fetch(`/search?q=${query}`);
            const results = await response.json();
            resultsContainer.innerHTML = '';
            resultsContainer.classList.remove('hidden');

            if (results.length > 0) {
                results.forEach((result, index) => {
                    const li = document.createElement('li');
                    li.classList.add('p-2', 'hover:bg-gray-100', 'cursor-pointer');
                    li.innerHTML = `<a href="${result.url}" class="block text-black">${result.title}</a>`;
                    li.addEventListener('click', () => {
                        window.location.href = result.url;
                    });
                    resultsContainer.appendChild(li);

                    li.addEventListener('mouseenter', () => {
                        currentFocus = index;
                        addActive(resultsContainer.querySelectorAll('li'));
                    });
                });

                document.addEventListener('keydown', function(e) {
                    if (resultsContainer.classList.contains('hidden')) return;
                    const items = resultsContainer.querySelectorAll('li');
                    if (e.key === 'ArrowDown') {
                        currentFocus = (currentFocus + 1) % items.length;
                        addActive(items);
                    } else if (e.key === 'ArrowUp') {
                        currentFocus = (currentFocus - 1 + items.length) % items.length;
                        addActive(items);
                    } else if (e.key === 'Enter') {
                        e.preventDefault();
                        if (currentFocus > -1) {
                            items[currentFocus].querySelector('a').click();
                        }
                    }
                });

                function addActive(items) {
                    items.forEach((item, index) => {
                        if (index === currentFocus) {
                            item.classList.add('bg-gray-200');
                        } else {
                            item.classList.remove('bg-gray-200');
                        }
                    });
                }
            } else {
                resultsContainer.innerHTML = '<li class="p-2 text-black">No results found</li>';
            }
        } else {
            resultsContainer.classList.add('hidden');
        }
    }

    // Add event listener to search button
    document.querySelector('button[type="button"]').addEventListener('click', searchContent);

    // Add event listener to search input for real-time search
    document.getElementById('search-bar').addEventListener('input', searchContent);
</script>


