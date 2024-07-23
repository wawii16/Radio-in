<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body class="flex bg-white min-h-screen">

    {{-- Sidebar Component --}}
    <x-Sidebar></x-Sidebar>

    <div id="main-content" class="flex-1 flex flex-col overflow-hidden bg-white transition-all duration-300 ml-0">
        <!-- Navbar -->
        <x-Navbar></x-Navbar>

        {{-- Main Content --}}
        <main class="container mx-auto mt-2 p-4">
            <section class="bg-gray-100 text-white rounded-lg overflow-hidden shadow-lg p-2 md:p-10">
                <h2 class="text-xl md:text-2xl font-bold text-emerald-700 mb-10 text-center">{{ $berita->judul }}</h2>
                <img class="w-full lg:w-1/2 h-80 object-cover mb-4 rounded-xl mx-auto" src="{{ url('/') }}/uploads/{{ $berita->photo }}" alt="News Image">
                <p class="text-black font-semibold mb-6">{{ $berita->created_at->format('Y-m-d') }}</p>
                <p class="text-black mb-6">"{!! nl2br(e($berita->deskripsi)) !!}"</p>
                <p class="text-black mb-16">{!! nl2br(e($berita->isi)) !!}</p>
                <p class="text-black mb-2">Sumber:</p>
                <p class="text-black font-semibold">{!! nl2br(e($berita->referensi)) !!}</p>
            </section>
        </main>
    </div>
</body>
</html>