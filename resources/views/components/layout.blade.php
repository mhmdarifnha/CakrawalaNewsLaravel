<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>{{ $title ?? ($slot ?? 'config(app.name)') }}</title> --}}
    {{-- <title>CakrawalaNews</title> --}}
    <title>{{ $title ?? "CakrawalaNews" }}</title>
    <!-- Tambahkan CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif

</head>

<body class="bg-white">
    <!-- Navbar -->
    <header class="flex justify-between px-6 py-5 bg-blue-500 text-white items-center">
        <!-- Logo atau Nama Aplikasi -->
        <a href="/" class="text-2xl font-bold hover:scale-105 transition-all ease-in-out duration-300">
            {{ config('app.name') }}
        </a>

        <!-- Menu Navbar -->
        <nav class="flex gap-2 items-center text-lg font-medium space-x-4 md:space-x-6">
            <div class="hidden md:flex gap-2 items-center">
                <!-- Menu Item -->
                <a href="/"
                    class="hover:text-blue-300 hover:bg-opacity-45 duration-300 rounded-full px-2 py-1 transition-all ease-in">Beranda</a>
                <a href="/article"
                    class="hover:text-blue-300 hover:bg-opacity-45 duration-300  rounded-full px-2 py-1 transition-all ease-in">Artikel</a>
                <a href="/video"
                    class="hover:text-blue-300 hover:bg-opacity-45 duration-300  rounded-full px-2 py-1 transition-all ease-in">Video</a>
                <a href="/about"
                    class="hover:text-blue-300 hover:bg-opacity-45 duration-300  rounded-full px-2 py-1 transition-all ease-in">Tentang</a>

                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="hover:text-blue-300 hover:bg-opacity-45 duration-300  rounded-full px-2 py-1 transition-all ease-in">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="hover:text-blue-300 hover:bg-opacity-45 duration-300  rounded-full px-2 py-1 transition-all ease-in">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="hover:text-blue-300 hover:bg-opacity-45 duration-300  rounded-full px-2 py-1 transition-all ease-in">Register</a>
                        @endif
                    @endauth
                @endif
            </div>

            <!-- Burger Menu Button untuk Mobile -->
            <div class="md:hidden flex items-center">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <!-- Dropdown Menu untuk Mobile -->
    <div id="mobile-menu"
        class="md:hidden hidden text-center bg-blue-500 text-white absolute top-0 left-0 right-0 mt-16 py-4 px-6 space-y-4">
        <a href="/"
            class="block hover:bg-gray-700 hover:bg-opacity-45 rounded-full px-2 py-1 transition-all ease-in">Beranda</a>
        <a href="/article"
            class="block hover:bg-gray-700 hover:bg-opacity-45 rounded-full px-2 py-1 transition-all ease-in">Artikel</a>
        <a href="/video"
            class="block hover:bg-gray-700 hover:bg-opacity-45 rounded-full px-2 py-1 transition-all ease-in">Video</a>
        <a href="/about"
            class="block hover:bg-gray-700 hover:bg-opacity-45 rounded-full px-2 py-1 transition-all ease-in">Tentang</a>

        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="block hover:bg-gray-700 hover:bg-opacity-45 rounded-full px-2 py-1 transition-all ease-in">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                    class="block hover:bg-gray-700 hover:bg-opacity-45 rounded-full px-2 py-1 transition-all ease-in">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="block hover:bg-gray-700 hover:bg-opacity-45 rounded-full px-2 py-1 transition-all ease-in">Register</a>
                @endif
            @endauth
        @endif
    </div>


    <!-- Konten Utama -->
    <div class="container mx-auto mt-4 bg-blue-50 p-4 rounded-md min-h-dvh flex flex-col">
        <h3 class="text-2xl font-bold mb-3">{{ $title ?? "tes" }}</h3>
        {{ $slot }}
    </div>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white py-8 mt-16">
        <div class="container mx-auto text-center">
            <p class="text-lg mb-4">© 2025 Your Website. All rights reserved.</p>
            <div class="flex justify-center gap-6">
                <a href="https://instagram.com/mhmdarifnha"
                    class="text-white hover:text-[#E4405F] transition-all duration-150 ease-in-out">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="https://github.com/mhmdarifnha"
                    class="text-white hover:text-[#211F1F] transition-all duration-150 ease-in-out">
                    <i class="fab fa-github text-2xl"></i>
                </a>
                <a href="https://youtube.com/@mhmdarifnha"
                    class="text-white hover:text-[#FF0000] transition-all duration-150 ease-in-out">
                    <i class="fab fa-youtube text-2xl"></i>
                </a>
            </div>
        </div>
    </footer>



    <!-- Tambahkan JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Script untuk Toggle Menu Mobile -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>