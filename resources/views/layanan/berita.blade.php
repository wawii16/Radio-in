<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body class="flex bg-gray-100 min-h-screen">

    <!-- Sidebar -->
    <x-Sidebar></x-Sidebar>

    <div id="main-content" class="flex-1 flex flex-col overflow-hidden bg-black transition-all duration-300 ml-0">
        <x-Navbar></x-Navbar>

        <!-- Portal Berita -->
        <main class="container mx-auto mt-2 p-4">
            <h2 class="text-2xl font-bold text-white mb-6 text-center">Portal Berita</h2>
            <section class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
                @foreach ($beritas as $berita)
                <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg">
                    <a href="#">
                        <img class="w-full h-64 object-cover" src="{{ url('/') }}/uploads/{{ $berita->photo }}" alt="News Image">
                    </a>
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">{{ $berita->judul }}</h3>
                        <p class="text-gray-300">{{ $berita->deskripsi }}</p>
                    </div>
                </div>
                @endforeach
            </section>
        </main>
    </div>

</body>

</html>
