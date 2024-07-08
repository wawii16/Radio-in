<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body class="flex bg-gray-100 min-h-screen">

    <x-Sidebar></x-Sidebar>

    <div class="flex-1 flex flex-col overflow-hidden bg-white">
        <!-- Navbar -->
        <x-Navbar></x-Navbar>

        <!-- Main Content -->

        <!-- Modal toggle -->
        <div class="mx-auto my-3">
            <button data-modal-target="add-modal" data-modal-toggle="add-modal" class="block text-white bg-emerald-700 hover:bg-emerald-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-lg" type="button">
                Tambah Berita
            </button>
        </div>

        <main class="max-w-full mt-3 mx-3 p-5 bg-emerald-800 text-white rounded-lg shadow overflow-hidden">
            <section class="mb-6">
                <h2 class="text-lg font-semibold mb-5">Daftar Berita</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-emerald-700 rounded-md">
                        <thead class="text-white">
                            <tr>
                                <th class="w-10 py-1 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-neutral-800">No</th>
                                <th class="py-1 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-neutral-800">Judul Berita</th>
                                <th class="py-1 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-neutral-800">Deskripsi</th>
                                <th class="py-1 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-neutral-800">Isi</th>
                                <th class="py-1 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-neutral-800">Referensi</th>
                                <th class="py-1 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-neutral-800">Dibuat</th>
                                <th class="py-1 px-2 text-center text-xs sm:text-sm font-medium uppercase border-b border-neutral-800">Cover</th>
                                <th class="py-1 px-2 text-center text-xs sm:text-sm font-medium uppercase border-b border-neutral-800">Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-neutral-800">
                            @php
                            $counter = 1; // Inisialisasi variabel counter
                            @endphp
                            @foreach ($beritas as $berita)
                            <tr>
                                <td class="w-10 py-1 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-neutral-800">{{ $counter++ }}</td>
                                <td class="py-1 px-2 text-xs sm:text-sm whitespace-wrap border-b border-neutral-800">{{ $berita->judul }}</td>
                                <td class="py-1 px-2 text-xs sm:text-sm whitespace-wrap border-b border-neutral-800">{{ $berita->deskripsi }}</td>
                                <td class="py-1 px-2 text-xs sm:text-sm whitespace-wrap border-b border-neutral-800">{{ $berita->isi }}</td>
                                <td class="py-1 px-2 text-xs sm:text-sm whitespace-wrap border-b border-neutral-800">{{ $berita->referensi }}</td>
                                <td class="py-1 px-2 text-xs sm:text-sm whitespace-wrap border-b border-neutral-800">{{ $berita->created_at->format('Y-m-d H:i:s') }}</td>
                                <td class="py-1 px-2 text-xs sm:text-sm whitespace-wrap border-b border-neutral-800 text-center">
                                    <img class="w-10 h-10 sm:w-20 sm:h-20 object-cover" src="{{ url('/') }}/uploads/{{ $berita->photo }}" alt="Gambar">
                                </td>
                                <td class="py-1 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-neutral-800 text-center">
                                    <a href="{{ route('admin.edit_berita', ['id' => $berita->id]) }}" class="bg-emerald-600 hover:bg-emerald-800 text-white font-bold py-1 px-2 sm:py-1 sm:px-3 rounded">Lihat</a>
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
                <div class="relative bg-gray-100 rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                        <h3 class="text-lg font-semibold text-emerald-800">
                            Tambah Berita
                        </h3>
                        <button type="button" class="text-emerald-800 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="add-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5" action="{{ url('admin/berita') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="judul" class="block mb-2 text-sm font-medium text-black">Judul Berita</label>
                                <input value="<?= old('judul') ?>" type="text" name="judul" id="judul" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 " placeholder="Masukkan Judul Berita..." required="">
                            </div>
                            <div class="col-span-2">
                                <label for="deskripsi" class="block mb-2 text-sm font-medium text-black">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="Masukkan Deskripsi Berita..." required=""></textarea>
                            </div>
                            <div class="col-span-2">
                                <label for="isi" class="block mb-2 text-sm font-medium text-black">Isi</label>
                                <textarea name="isi" id="isi" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="Masukkan Isi Berita..." required="" rows="10"></textarea>
                            </div>
                            <div class="col-span-2">
                                <label for="referensi" class="block mb-2 text-sm font-medium text-black">Referensi</label>
                                <textarea name="referensi" id="referensi" class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="Masukkan Referensi Berita..." required=""></textarea>
                            </div>
                            <div class="col-span-2">
                                <label class="block mb-2 text-sm font-medium text-black" for="file_input">Upload file</label>
                                <input class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-white " id="file_input" type="file" accept=".png, .jpg, .jpeg" name="photo">
                            </div>
                        </div>
                        <button type="submit" class=" text-white inline-flex items-center bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
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