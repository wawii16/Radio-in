<!-- Sidebar Component -->
<aside id="sidebar" class="bg-gray-100 min-h-screen w-64 shadow-xl md:w-56 transform md:translate-x-0 -translate-x-full fixed top-0 left-0 z-50 md:relative md:flex-shrink-0 transition-transform duration-300 ease-in-out">
    <div class="flex flex-col h-full">
        <div class="flex items-center justify-center py-4 mb-3 mt-5">
            <div class="w-40 h-20">
                <img class="w-full rounded-xl object-cover" src="{{ asset('/images/logo-radioin.png') }}" alt="logo">
            </div>
        </div>
        <nav class="text-black flex-1 mt-12">
            <ul>
                <li class="mb-2 flex items-center">
                    <a href="/" class="w-full block py-2 px-4 hover:bg-emerald-600 hover:text-white {{ request()->is('/') ? 'bg-emerald-400 text-black' : '' }}">
                        <i class="fa-solid fa-house mr-3"></i>Beranda
                    </a>
                </li>
                <li class="mb-2 flex items-center">
                    <a href="#" id="search-link" class="w-full block py-2 px-4 hover:bg-emerald-600 hover:text-white">
                        <i class="fa-solid fa-magnifying-glass mr-3"></i>Cari
                    </a>
                </li>
                <li class="mb-2 flex items-center">
                    <a href="/radio" class="w-full block py-2 px-4 hover:bg-emerald-600 hover:text-white {{ request()->is('radio') ? 'bg-emerald-400 text-black' : '' }}">
                        <i class="fa-solid fa-radio mr-3"></i>Radio
                    </a>
                </li>
                <li class="mb-2 flex items-center">
                    <a href="/podcast" class="w-full block py-2 px-4 hover:bg-emerald-600 hover:text-white {{ request()->is('podcast') ? 'bg-emerald-400 text-black' : '' }}">
                        <i class="fa-solid fa-podcast mr-3"></i>Podcast
                    </a>
                </li>
                <li class="mb-2 flex items-center">
                    <a href="/berita" class="w-full block py-2 px-4 hover:bg-emerald-600 hover:text-white {{ request()->is('berita') ? 'bg-emerald-400 text-black' : '' }}">
                        <i class="fa-solid fa-newspaper mr-3"></i>Berita
                    </a>
                </li>
                @if(auth()->check() && auth()->user()->isAdmin())
                <li class="mb-2 flex items-center">
                    <a href="/admin" class="w-full block py-2 px-4 hover:bg-emerald-600 hover:text-white {{ request()->is('admin') ? 'bg-emerald-400 text-black' : '' }}">
                        <i class="fa-solid fa-user-tie mr-3"></i>Admin
                    </a>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>

<!-- Sidebar Toggle Button -->
<button id="sidebarToggle" class="text-black bg-white px-2 py-1 rounded-full text-xl md:hidden fixed top-4 left-6 z-50">
    <i class="fa-solid fa-bars"></i>
</button>

<!-- Overlay for main content when sidebar is visible -->
<div id="overlay" class="fixed inset-0 bg-black opacity-0 pointer-events-none transition-opacity duration-300 z-40 md:hidden"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const sidebarToggle = document.getElementById('sidebarToggle');

        function collapseSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.remove('opacity-50');
            overlay.classList.add('opacity-0');
            overlay.classList.add('pointer-events-none');
            overlay.classList.remove('pointer-events-auto');
        }

        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('opacity-0');
            overlay.classList.toggle('opacity-50');
            overlay.classList.toggle('pointer-events-none');
            overlay.classList.toggle('pointer-events-auto');
        });

        // Auto collapse sidebar on navigation click
        const navigationLinks = sidebar.querySelectorAll('nav ul li a');
        navigationLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 768) {
                    collapseSidebar();
                }
            });
        });

        // Auto collapse sidebar when window width is 760px or less
        function checkWindowWidthAndCollapse() {
            if (window.innerWidth < 768) {
                collapseSidebar();
            }
        }

        // Initial check and event listener for window resize
        checkWindowWidthAndCollapse();
        window.addEventListener('resize', function() {
            checkWindowWidthAndCollapse();
        });
    });
</script>
