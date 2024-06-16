<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar and Sidebar with Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body class="flex bg-gray-100 min-h-screen">

    <x-Sidebar></x-Sidebar>

    <div class="flex-1 flex flex-col overflow-hidden bg-black">
        <!-- Navbar -->
        <x-Navbar></x-Navbar>


        <!-- Main Content -->


        <!-- Modal toggle -->
        <div class="mx-auto my-3">
            <button data-modal-target="add-modal" data-modal-toggle="add-modal" class="block text-black bg-yellow-300 hover:bg-yellow-500  font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                Tambah Podcast
            </button>
        </div>

        <main class="max-w-full mt-3 mx-3 p-5 bg-neutral-900 text-white rounded-lg shadow overflow-hidden">
            <section class="mb-6">
                <h2 class="text-lg font-semibold mb-5">Daftar Podcast</h2>
                <div class="max-w-4xl mx-auto bg-neutral-700 shadow overflow-hidden">
                    <table class="min-w-full bg-neutral-700">
                        <thead class="text-white">
                            <tr>
                                <th class="w-10 py-3 px-4 text-left font-medium uppercase border-b border-neutral-800">No</th>
                                <th class="py-3 px-4 text-left font-medium uppercase border-b border-neutral-800">Nama Podcast</th>
                                <th class="py-3 px-4 text-left font-medium uppercase border-b border-neutral-800">Artis</th>
                                <th class="py-3 px-4 text-center font-medium uppercase border-b border-neutral-800">Cover</th>
                                <th class="py-3 px-4 text-center font-medium uppercase border-b border-neutral-800">Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-neutral-800">
                            @php
                            $counter = 1; // Inisialisasi variabel counter
                            @endphp
                            @foreach ($podcasts as $podcast)

                            <tr>
                                <td class="w-10 py-3 px-4 whitespace-nowrap border-b border-neutral-800">{{ $counter++ }}</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800">{{ $podcast->name }}</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800">{{ $podcast->artis }}</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800 text-center"> <img class="w-20 h-20" src="{{ url('/') }}/uploads/{{ $podcast->photo }}" alt="Gambar">
                                </td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800 text-center">
                                    <a href="{{ route('admin.edit_podcast', ['id' => $podcast->id]) }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-1 px-3 rounded">Lihat</a>

                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </section>
        </main>

        <!-- Modal ADD -->
        <div id="add-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Tambah Podcast
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="add-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5" action="{{ url('admin/podcast') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Podcast</label>
                                <input value="<?= old('name') ?>" type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="artis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Podcast</label>
                                <input value="<?= old('artis') ?>" type="text" name="artis" id="artis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Url</label>
                                <input value="<?= old('url') ?>" type="text" name="url" id="url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                            </div>
                            <div class="col-span-2">

                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" accept=".png, .jpg, .jpeg" name="photo">

                            </div>

                            <!-- <div class="col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                            </div> -->
                        </div>
                        <button type="submit" class=" text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                            Tambah
                        </button>
                    </form>
                </div>
            </div>
        </div>




        <!-- JavaScript untuk Pemutar Radio -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>




</body>

</html>