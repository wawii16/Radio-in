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
        </main>
    </div>
</body>

</html>