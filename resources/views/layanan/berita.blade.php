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

    <!-- Sidebar -->
    <x-Sidebar></x-Sidebar>

    <div class="flex-1 flex flex-col overflow-hidden bg-black">
        <x-Navbar></x-Navbar>

        {{-- Main Content --}}
        <main class="container mx-auto mt-2 p-4">
            <section class="grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1">
                <!-- Berita 1 -->
                @foreach ($beritas as $berita)

                <div class="bg-neutral-700 text-white rounded-lg overflow-hidden shadow-lg flex">
                    <a href="/berita" class="flex-shrink-0 w-1/5">
                        <img class="w-full h-full object-cover max-w-xs" src="{{ url('/') }}/uploads/{{ $berita->photo }}" alt="News Image">
                    </a>
                    <div class="p-6 flex flex-col w-full">
                        <h3 class="text-xl font-bold mb-4">{{ $berita->judul }}</h3>
                        <p class="text-gray-300 mb-4">{{ $berita->deskripsi }}.</p>

                    </div>
                </div>
                @endforeach
            </section>
        </main>
    </div>

</body>

</html>