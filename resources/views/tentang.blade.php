@extends('layouts.app')

@section('content')
{{-- Header Section --}}
<div class="bg-gradient-to-r from-blue-600 to-purple-700 py-16 mb-12">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-5xl font-bold text-white mb-4">Tentang Kami</h1>
        <p class="text-xl text-white opacity-90">Keunggulan dan Komitmen Kami untuk Kenyamanan Anda</p>
    </div>
</div>

<div class="container mx-auto px-6 pb-16">
    {{-- Main Content --}}
    <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
        <div class="relative">
            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=900&q=80" 
                 class="rounded-2xl shadow-2xl w-full" alt="Hotel">
            <div class="absolute -bottom-6 -right-6 bg-yellow-500 text-gray-900 px-6 py-4 rounded-xl shadow-xl">
                <p class="text-3xl font-bold">10+</p>
                <p class="text-sm font-semibold">Tahun Pengalaman</p>
            </div>
        </div>
        <div>
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Selamat Datang di <span class="text-blue-600">HotelKu</span></h2>
            <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                <strong class="text-blue-600">HotelKu</strong> adalah hotel modern yang menggabungkan kenyamanan, keindahan arsitektur, dan suasana elegan untuk pengalaman menginap yang berkesan. Terletak strategis dengan pemandangan kolam renang, HotelKu cocok untuk liburan keluarga maupun perjalanan bisnis.
            </p>
            <p class="text-gray-700 mb-6 leading-relaxed text-lg">
                Setiap kamar dilengkapi fasilitas modern seperti Wi-Fi, televisi layar datar, AC, dan perlengkapan mandi premium untuk kenyamanan maksimal. Dengan fasilitas lengkap dan pelayanan prima, HotelKu menjadikan setiap momen menginap istimewa.
            </p>
            <div class="flex flex-wrap gap-4 mt-8">
                <div class="flex items-center bg-blue-50 px-4 py-2 rounded-lg">
                    <span class="text-2xl mr-2">⭐</span>
                    <span class="font-semibold text-gray-700">Rating 4.8/5</span>
                </div>
                <div class="flex items-center bg-purple-50 px-4 py-2 rounded-lg">
                    <span class="text-2xl mr-2">🏆</span>
                    <span class="font-semibold text-gray-700">Hotel Terbaik 2024</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Fasilitas Section --}}
    <div class="mb-16">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Fasilitas & Layanan</h2>
        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="text-5xl mb-4">🏊</div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Kolam Renang</h3>
                <p class="text-gray-600 text-sm">Infinity pool dengan pemandangan kota</p>
            </div>
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="text-5xl mb-4">🍽️</div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Restoran</h3>
                <p class="text-gray-600 text-sm">Masakan lokal & internasional</p>
            </div>
            <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-6 rounded-xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="text-5xl mb-4">💪</div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Fitness Center</h3>
                <p class="text-gray-600 text-sm">Gym modern 24 jam</p>
            </div>
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-xl text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="text-5xl mb-4">💆</div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Spa & Wellness</h3>
                <p class="text-gray-600 text-sm">Relaksasi & perawatan premium</p>
            </div>
        </div>
    </div>

    {{-- Kenapa Memilih Kami --}}
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-2xl p-12 mb-16">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Mengapa Memilih HotelKu?</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4 shadow-lg">1</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Lokasi Strategis</h3>
                <p class="text-gray-600">Dekat dengan pusat kota, bandara, dan tempat wisata utama</p>
            </div>
            <div class="text-center">
                <div class="bg-purple-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4 shadow-lg">2</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Pelayanan Premium</h3>
                <p class="text-gray-600">Tim profesional siap melayani 24/7 dengan senyuman</p>
            </div>
            <div class="text-center">
                <div class="bg-yellow-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4 shadow-lg">3</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Harga Terbaik</h3>
                <p class="text-gray-600">Kualitas premium dengan harga yang kompetitif</p>
            </div>
        </div>
    </div>

    {{-- Kontak Section --}}
    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Hubungi Kami</h2>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-lg mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">Alamat</p>
                        <p class="text-gray-600">Jl. Mawar No.123, Jakarta Pusat, DKI Jakarta 10110</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-purple-100 text-purple-600 p-3 rounded-lg mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">Telepon</p>
                        <p class="text-gray-600">(021) 123-456</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-yellow-100 text-yellow-600 p-3 rounded-lg mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">Email</p>
                        <p class="text-gray-600">info@hotelku.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-blue-600 to-purple-700 rounded-2xl shadow-xl p-8 text-white">
            <h2 class="text-3xl font-bold mb-4">Jam Operasional</h2>
            <div class="space-y-3 mb-6">
                <div class="flex justify-between border-b border-white/20 pb-2">
                    <span class="font-semibold">Check-in</span>
                    <span>14:00 WIB</span>
                </div>
                <div class="flex justify-between border-b border-white/20 pb-2">
                    <span class="font-semibold">Check-out</span>
                    <span>12:00 WIB</span>
                </div>
                <div class="flex justify-between border-b border-white/20 pb-2">
                    <span class="font-semibold">Resepsionis</span>
                    <span>24 Jam</span>
                </div>
                <div class="flex justify-between pb-2">
                    <span class="font-semibold">Restoran</span>
                    <span>06:00 - 23:00 WIB</span>
                </div>
            </div>
            <a href="{{ route('bookings.create') }}" class="block w-full bg-yellow-500 hover:bg-yellow-600 text-gray-900 text-center px-6 py-4 rounded-xl font-bold transition-all duration-300 shadow-lg mt-6">
                Pesan Sekarang
            </a>
        </div>
    </div>
</div>
@endsection