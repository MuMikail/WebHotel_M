<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelKu - Hotel Booking System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-blue-600 to-purple-700 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-2 group">
                    <div class="bg-white text-blue-600 w-10 h-10 rounded-lg flex items-center justify-center font-bold text-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                        H
                    </div>
                    <span class="text-2xl font-bold text-white tracking-tight">HotelKu</span>
                </a>

                <!-- Desktop Menu -->
                <ul class="hidden md:flex items-center space-x-2">
                    <li>
                        <a href="{{ route('beranda') }}" 
                           class="text-white hover:text-yellow-300 px-4 py-2 rounded-lg transition-all duration-300 hover:bg-white/10 font-medium {{ Request::routeIs('beranda') ? 'bg-white/20 text-yellow-300' : '' }}">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('produk') }}" 
                           class="text-white hover:text-yellow-300 px-4 py-2 rounded-lg transition-all duration-300 hover:bg-white/10 font-medium {{ Request::routeIs('produk') ? 'bg-white/20 text-yellow-300' : '' }}">
                            Kamar
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tentang') }}" 
                           class="text-white hover:text-yellow-300 px-4 py-2 rounded-lg transition-all duration-300 hover:bg-white/10 font-medium {{ Request::routeIs('tentang') ? 'bg-white/20 text-yellow-300' : '' }}">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('bookings.index') }}" 
                           class="text-white hover:text-yellow-300 px-4 py-2 rounded-lg transition-all duration-300 hover:bg-white/10 font-medium {{ Request::routeIs('bookings.index') ? 'bg-white/20 text-yellow-300' : '' }}">
                            Data
                        </a>
                    </li>
                    <li class="ml-4">
                        <a href="{{ route('bookings.create') }}" 
                           class="bg-yellow-400 text-gray-900 font-bold px-6 py-3 rounded-lg shadow-lg hover:bg-yellow-500 hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300 inline-flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Pesan Kamar
                        </a>
                    </li>
                </ul>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden text-white p-2 rounded-lg hover:bg-white/10 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('beranda') }}" 
                           class="block text-white hover:text-yellow-300 px-4 py-3 rounded-lg transition-all duration-300 hover:bg-white/10 font-medium {{ Request::routeIs('beranda') ? 'bg-white/20 text-yellow-300' : '' }}">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('produk') }}" 
                           class="block text-white hover:text-yellow-300 px-4 py-3 rounded-lg transition-all duration-300 hover:bg-white/10 font-medium {{ Request::routeIs('produk') ? 'bg-white/20 text-yellow-300' : '' }}">
                            Kamar
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tentang') }}" 
                           class="block text-white hover:text-yellow-300 px-4 py-3 rounded-lg transition-all duration-300 hover:bg-white/10 font-medium {{ Request::routeIs('tentang') ? 'bg-white/20 text-yellow-300' : '' }}">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('bookings.index') }}" 
                           class="block text-white hover:text-yellow-300 px-4 py-3 rounded-lg transition-all duration-300 hover:bg-white/10 font-medium {{ Request::routeIs('bookings.index') ? 'bg-white/20 text-yellow-300' : '' }}">
                            Data
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('bookings.create') }}" 
                           class="block bg-yellow-400 text-gray-900 font-bold px-6 py-3 rounded-lg shadow-lg hover:bg-yellow-500 text-center">
                            Pesan Kamar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="container mx-auto px-6 py-12">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- About -->
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="bg-blue-600 text-white w-10 h-10 rounded-lg flex items-center justify-center font-bold text-xl">
                            H
                        </div>
                        <span class="text-xl font-bold">HotelKu</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Hotel modern dengan fasilitas lengkap dan pelayanan terbaik untuk pengalaman menginap yang tak terlupakan.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Menu Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('beranda') }}" class="text-gray-400 hover:text-yellow-400 transition">Beranda</a></li>
                        <li><a href="{{ route('produk') }}" class="text-gray-400 hover:text-yellow-400 transition">Kamar</a></li>
                        <li><a href="{{ route('tentang') }}" class="text-gray-400 hover:text-yellow-400 transition">Tentang Kami</a></li>
                        <li><a href="{{ route('bookings.index') }}" class="text-gray-400 hover:text-yellow-400 transition">Data</a></li>
                        <li><a href="{{ route('bookings.create') }}" class="text-gray-400 hover:text-yellow-400 transition">Pesan Kamar</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Hubungi Kami</h3>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Jl. Mawar No.123, Jakarta</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>(021) 123-456</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>info@hotelku.com</span>
                        </li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 w-10 h-10 rounded-full flex items-center justify-center transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-pink-600 hover:bg-pink-700 w-10 h-10 rounded-full flex items-center justify-center transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="bg-blue-400 hover:bg-blue-500 w-10 h-10 rounded-full flex items-center justify-center transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; 2025 HotelKu. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
