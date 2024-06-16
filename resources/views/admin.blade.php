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

    {{-- Sidebar Component --}}
    <x-sidebar></x-sidebar>

    <div id="main-content" class="flex-1 flex flex-col overflow-hidden bg-black transition-all duration-300 ml-0">
        <!-- Navbar -->
        <x-Navbar></x-Navbar>

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
                                    <a href="admin/radio" class="bg-yellow-300 hover:bg-yellow-500 text-black font-bold py-1 px-3 rounded">Lihat</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-10 py-3 px-4 whitespace-nowrap border-b border-neutral-800">2.</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800">Podcast</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800">
                                    <a href="admin/podcast" class="bg-yellow-300 hover:bg-yellow-500 text-black font-bold py-1 px-3 rounded">Lihat</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-10 py-3 px-4 whitespace-nowrap border-b border-neutral-800">3.</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800">Berita</td>
                                <td class="py-3 px-4 whitespace-nowrap border-b border-neutral-800">
                                    <a href="admin/berita" class="bg-yellow-300 hover:bg-yellow-500 text-black font-bold py-1 px-3 rounded">Lihat</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>


</body>

</html>