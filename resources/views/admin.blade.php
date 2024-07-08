<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body class="flex bg-gray-100 min-h-screen">

    {{-- Sidebar Component --}}
    <x-sidebar></x-sidebar>

    <div id="main-content" class="flex-1 flex flex-col overflow-hidden bg-white transition-all duration-300 ml-0">
        <!-- Navbar -->
        <x-Navbar></x-Navbar>

        <!-- Main Content -->
        {{-- Tabel Manajemen Konten --}}
        <h2 class="text-2xl text-emerald-700 font-bold mt-5 mb-5 mx-auto">Dashboard Admin</h2>
        <main class="max-w-full mt-3 mx-3 p-5 bg-gray-100 text-white rounded-lg shadow overflow-hidden">
            <section class="mb-6">
                <div class="overflow-x-auto">
                    <h2 class="text-md text-emerald-700 font-bold mb-5">Tabel Manajemen Konten</h2>
                    <table class="min-w-full bg-emerald-700 rounded">
                        <thead class="text-white">
                            <tr>
                                <th class="w-10 py-1 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">No</th>
                                <th class="py-1 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">Nama Layanan</th>
                                <th class="py-1 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white">
                            <tr>
                                <td class="w-10 py-1 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">1.</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">Radio</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">
                                    <a href="admin/radio" class="bg-emerald-600 hover:bg-emerald-800 text-white font-bold py-1 px-2 sm:py-1 sm:px-3 rounded">Lihat</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-10 py-1 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">2.</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">Podcast</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">
                                    <a href="admin/podcast" class="bg-emerald-600 hover:bg-emerald-800 text-white font-bold py-1 px-2 sm:py-1 sm:px-3 rounded">Lihat</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-10 py-1 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">3.</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">Berita</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">
                                    <a href="admin/berita" class="bg-emerald-600 hover:bg-emerald-800 text-white font-bold py-1 px-2 sm:py-1 sm:px-3 rounded">Lihat</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            {{-- Tabel Manajemen User --}}
            <section class="mt-6">
                <div class="overflow-x-auto">
                    <h2 class="text-md text-emerald-700 font-bold mb-5">Tabel Manajemen User</h2>
                    <table class="min-w-full bg-emerald-700 rounded">
                        <thead class="text-white">
                            <tr>
                                <th class="w-10 py-2 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">No</th>
                                <th class="py-2 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">Nama</th>
                                <th class="py-2 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">Email</th>
                                <th class="py-2 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">Tipe User</th>
                                <th class="py-2 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white">
                            @foreach ($users as $user)
                            <tr>
                                <td class="w-10 py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">{{ $loop->iteration }}</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">{{ $user->name }}</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">{{ $user->email }}</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">{{ ucfirst($user->usertype) }}</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">
                                    <a href="{{ route('admin.edit_user_modals', ['id' => $user->id]) }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-1 px-2 sm:py-1 sm:px-3 rounded">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
            
            {{-- Tabel Manajemen Pesan --}}
            <section class="mt-6">
                <div class="overflow-x-auto">
                    <h2 class="text-md text-emerald-700 font-bold mb-5">Tabel Manajemen Pesan</h2>
                    <table class="min-w-full bg-emerald-700 rounded">
                        <thead class="text-white">
                            <tr>
                                <th class="w-10 py-2 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">No</th>
                                <th class="py-2 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">Nama Pengirim</th>
                                <th class="py-2 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">isi Pesan</th>
                                <th class="py-2 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">Dikirim</th>
                                <th class="py-2 px-2 text-left text-xs sm:text-sm font-medium uppercase border-b border-white">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white">
                            @foreach ($messages as $message)
                            <tr>
                                <td class="w-10 py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">{{ $loop->iteration }}</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">{{ $message->sender_name }}</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-wrap border-b border-white break-words">{{ $message->message_content }}</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">{{ $message->created_at->format('Y-m-d H:i:s') }}</td>
                                <td class="py-2 px-2 text-xs sm:text-sm whitespace-nowrap border-b border-white">
                                    <button data-modal-target="modalDeleteMessage{{ $message->id }}"
                                        data-modal-toggle="modalDeleteMessage{{ $message->id }}"
                                        class="bg-red-600 hover:bg-red-800 text-white font-bold py-1 px-2 sm:py-1 sm:px-3 rounded">
                                    Delete
                                </button>
                                </td>
                            </tr>

                             <!-- Modal Delete Confirmation -->
                            <div id="modalDeleteMessage{{ $message->id }}"
                                data-flowbite-target="modalDeleteMessage{{ $message->id }}"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-gray-700 rounded-lg shadow">
                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center"
                                                data-modal-hide="modalDeleteMessage{{ $message->id }}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <form action="{{ route('deleteMessage', ['id' => $message->id]) }}"
                                                method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-white w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-white">Are you sure you want to delete this message?</h3>
                                                <button type="submit"
                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                    Yes, I'm sure
                                                </button>
                                                <button type="button"
                                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-black focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-300 focus:z-10 focus:ring-4 focus:ring-gray-100"
                                                        data-modal-hide="modalDeleteMessage{{ $message->id }}">
                                                    No, cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Delete Confirmation -->

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>            
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite/js/flowbite.js"></script>
</body>

</html>