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

    <div id="main-content" class="flex-1 flex flex-col overflow-hidden bg-white transition-all duration-300 ml-0">
        <!-- Navbar -->
        <x-Navbar></x-Navbar>

        <!-- About Us Content -->
        <main class="w-full py-8 px-4 flex">
            <div class="bg-gray-100 w-full rounded-lg shadow-lg p-6 md:p-8">
                <h1 class="text-3xl font-bold text-emerald-700 mb-4">About Us</h1>
                <h2 class="text-2xl font-bold text-emerald-600 mb-6 text-center">Team</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Team Member Card -->
                    <div class="bg-emerald-600 rounded-full p-4 flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img src="teams/reffy.jpg" alt="Team Member"
                                class="h-16 w-16 rounded-full object-cover">
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-white">Reffy Maulana</h2>
                            <p class="text-white">Front-End Developer</p>
                        </div>
                    </div>

                    <!-- Team Member Card -->
                    <div class="bg-emerald-600 rounded-full p-4 flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img src="teams/dwi.jpg" alt="Team Member"
                                class="h-16 w-16 object-cover rounded-full">
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-white">Dwi Wahyu Maulana</h2>
                            <p class="text-white">Back-End Developer</p>
                        </div>
                    </div>

                    <!-- Team Member Card -->
                    <div class="bg-emerald-600 rounded-full p-4 flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img src="teams/zacky.jpg" alt="Team Member"
                                class="h-16 w-16 rounded-full object-cover">
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-white">Muhamad Zacky Fayza</h2>
                            <p class="text-white">UI/UX Designer</p>
                        </div>
                    </div>

                    <!-- Team Member Card -->
                    <div class="bg-emerald-600 rounded-full p-4 flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img src="teams/irfan.jpg" alt="Team Member"
                                class="h-16 w-16 rounded-full object-cover">
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-white">Muhammad Irfan Almunawar</h2>
                            <p class="text-white">Content Manager & Technical Support</p>
                        </div>
                    </div>

                    <!-- Team Member Card -->
                    <div class="bg-emerald-600 rounded-full p-4 flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Team Member"
                                class="h-16 w-16 rounded-full">
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-white">Rifqi Putrawan Sumbogo</h2>
                            <p class="text-white">Report's Writer & Technical Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
