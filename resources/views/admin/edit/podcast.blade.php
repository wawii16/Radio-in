<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <h1 class="text-emerald-700 text-2xl font-bold text-center mt-6">Form Edit Podcast</h1>

    <form action="{{ route('podcastUpdate', $podcast->id) }}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg mt-10">
        @method('put')
        @csrf
        <div class="grid gap-4 mb-4">
            <div class="col-span-2">
                <label for="name" class="block mb-2 text-sm font-medium text-black">Nama Podcast</label>
                <input value="{{ old('name', $podcast->name) }}" type="text" name="name" id="name" class="bg-gray-100 border border-gray-300 text-black text-sm rounded-lg focus:ring-gray-600 focus:border-gray-600 block w-full p-2.5" placeholder="Type podcast name" required>
            </div>
            <div class="col-span-2">
                <label for="artis" class="block mb-2 text-sm font-medium text-black">Nama Artis</label>
                <input value="{{ old('artis', $podcast->artis) }}" type="text" name="artis" id="artis" class="bg-gray-100 border border-gray-300 text-black text-sm rounded-lg focus:ring-gray-600 focus:border-gray-600 block w-full p-2.5" placeholder="Type artist name" required>
            </div>
            <div class="col-span-2">
                <label for="url" class="block mb-2 text-sm font-medium text-black">URL</label>
                <input value="{{ old('url', $podcast->url) }}" type="text" name="url" id="url" class="bg-gray-100 border border-gray-300 text-black text-sm rounded-lg focus:ring-gray-600 focus:border-gray-600 block w-full p-2.5" placeholder="Type podcast URL" required>
            </div>
            <div class="col-span-2">
                @if ($podcast->photo != "")
                <img src="{{ url('/') }}/uploads/{{ $podcast->photo }}" class="w-10 h-10 mb-2" alt="">
                @endif
                <label class="block mb-2 text-sm font-medium text-black" for="file_input">Upload file</label>
                <input class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-100 focus:outline-none" id="file_input" type="file" accept=".png, .jpg, .jpeg" name="photo">
            </div>
        </div>
        <div class="flex justify-start gap-2">
            <button type="submit" class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Delete</button>
        </div>
    </form>

    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-gray-700 rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <form action="{{ route('podcastDestroy', $podcast->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-white w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-white">Are you sure you want to delete this product?</h3>
                        <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-black focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-300 focus:z-10 focus:ring-4 focus:ring-gray-100">No, cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
