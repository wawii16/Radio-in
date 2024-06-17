<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body class="flex bg-gray-100 min-h-screen">

    {{-- Sidebar Component --}}
    <x-sidebar></x-sidebar>

    <div id="main-content" class="flex-1 flex flex-col overflow-hidden bg-black transition-all duration-300 ml-0">
        <!-- Navbar -->
        <x-Navbar></x-Navbar>

        <!-- About Us Content -->
        <main class="container mx-auto py-8 px-4 flex">
            <div class="bg-neutral-900 rounded-lg shadow-lg p-6 md:p-8">
                <h1 class="text-3xl font-bold text-yellow-300 mb-4">About Us</h1>
                <h2 class="text-2xl font-bold text-white mb-6 text-center">Team</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Team Member Card -->
                    <div class="bg-gray-200 rounded-full p-4 flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img src="teams/reffy.jpg" alt="Team Member"
                                class="h-16 w-16 rounded-full object-cover">
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">Reffy Maulana</h2>
                            <p class="text-gray-600">Front-End Developer</p>
                        </div>
                    </div>

                    <!-- Team Member Card -->
                    <div class="bg-gray-200 rounded-full p-4 flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Team Member"
                                class="h-16 w-16 rounded-full">
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">Dwi Wahyu Maulana</h2>
                            <p class="text-gray-600">Back-End Developer</p>
                        </div>
                    </div>

                    <!-- Team Member Card -->
                    <div class="bg-gray-200 rounded-full p-4 flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img src="teams/zacky.jpg" alt="Team Member"
                                class="h-16 w-16 rounded-full object-cover">
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">Muhamad Zacky Fayza</h2>
                            <p class="text-gray-600">UI/UX Designer</p>
                        </div>
                    </div>

                    <!-- Team Member Card -->
                    <div class="bg-gray-200 rounded-full p-4 flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img src="teams/irfan.jpg" alt="Team Member"
                                class="h-16 w-16 rounded-full object-cover">
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">Muhammad Irfan Almunawar</h2>
                            <p class="text-gray-600">Content Manager & Technical Support</p>
                        </div>
                    </div>

                    <!-- Team Member Card -->
                    <div class="bg-gray-200 rounded-full p-4 flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Team Member"
                                class="h-16 w-16 rounded-full">
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">Rifqi Putrawan Sumbogo</h2>
                            <p class="text-gray-600">Report's Writer & Technical Support</p>
                        </div>
                    </div>

                </div>

                <h2 class="text-2xl text-white font-bold text-center mt-6">About Website</h2>
                <h3 class="text-white font-semibold text-xl mt-8">Selamat Datang di Website Radio, Podcast, dan Portal Berita Kami!</h3>
                <p class="text-white leading-relaxed mt-4">
                    Di sini, kami menyediakan pengalaman multimedia lengkap yang mencakup:
                </p>
                <ul class="text-white mt-4 ml-8 list-disc leading-relaxed text-justify">
                    <li>
                        <strong class="font-semibold">Radio:</strong> Nikmati streaming radio 24/7 dari berbagai genre musik favorit Anda.
                        Dari pop kontemporer hingga klasik, temukan playlist yang cocok dengan suasana hati Anda hari ini.
                    </li>
                    <li class="mt-4">
                        <strong class="font-semibold">Podcast:</strong> Telusuri katalog podcast kami yang luas, dari cerita inspiratif
                        hingga diskusi mendalam tentang topik terkini. Dengan bermacam-macam tema dan pembicara yang berbeda, kami
                        menghadirkan wawasan baru setiap hari.
                    </li>
                    <li class="mt-4">
                        <strong class="font-semibold">Portal Berita:</strong> Dapatkan informasi terbaru dan terpercaya dari portal berita
                        kami. Dari berita politik hingga hiburan, kami memberikan liputan yang mendalam dan analisis yang tajam untuk
                        memenuhi kebutuhan wawasan Anda.
                    </li>
                </ul>
                <p class="text-white leading-relaxed mt-8">
                    Kami berkomitmen untuk memberikan pengalaman multimedia yang menyenangkan dan bermanfaat untuk semua pengguna kami.
                    Temukan lebih banyak lagi dengan menjelajahi situs kami sekarang!
                </p>
            </div>
        </main>

    </div>
</body>

</html>