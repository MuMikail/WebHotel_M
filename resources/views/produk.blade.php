@extends('layouts.app')

@section('content')
{{-- Header Section --}}
<div class="bg-gradient-to-r from-blue-600 to-purple-700 py-16 mb-12">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-5xl font-bold text-white mb-4">Pilihan Kamar Kami</h1>
        <p class="text-xl text-white opacity-90">Temukan kamar yang sempurna untuk pengalaman menginap Anda</p>
    </div>
</div>

<div class="container mx-auto px-6 pb-16">
    <div class="grid md:grid-cols-3 gap-8">
        {{-- Kamar Standar --}}
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl transition-all duration-300">
            <div class="relative overflow-hidden">
                <img src="{{ asset('images/standar.jpg') }}" alt="Standar" class="h-64 w-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 right-4 bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                    Populer
                </div>
            </div>
            <div class="p-8">
                <h5 class="text-3xl font-bold mb-3 text-gray-800">Kamar Standar</h5>
                <p class="text-gray-600 mb-6 leading-relaxed">Nyaman & terjangkau dengan fasilitas dasar untuk kenyamanan Anda.</p>
                
                {{-- Fasilitas --}}
                <div class="mb-6 space-y-2">
                    <div class="flex items-center text-gray-700">
                        <span class="mr-2">✓</span>
                        <span class="text-sm">WiFi Gratis</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <span class="mr-2">✓</span>
                        <span class="text-sm">TV Kabel</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <span class="mr-2">✓</span>
                        <span class="text-sm">AC & Air Panas</span>
                    </div>
                </div>

                <div class="border-t pt-6">
                    <div class="flex items-baseline justify-center mb-6">
                        <span class="text-4xl font-bold text-blue-600">Rp 3.000.000</span>
                        <span class="text-gray-500 ml-2">/ malam</span>
                    </div>
                    <a href="{{ route('bookings.create') }}" class="block w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white text-center px-6 py-4 rounded-xl font-semibold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>

        {{-- Kamar Deluxe --}}
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl transition-all duration-300 border-4 border-yellow-400">
            <div class="relative overflow-hidden">
                <img src="{{ asset('images/deluxe.jpg') }}" alt="Deluxe" class="h-64 w-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 right-4 bg-yellow-500 text-gray-900 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                    ⭐ Rekomendasi
                </div>
            </div>
            <div class="p-8">
                <h5 class="text-3xl font-bold mb-3 text-gray-800">Kamar Deluxe</h5>
                <p class="text-gray-600 mb-6 leading-relaxed">Lebih luas & nyaman dengan tambahan fasilitas premium untuk Anda.</p>
                
                {{-- Fasilitas --}}
                <div class="mb-6 space-y-2">
                    <div class="flex items-center text-gray-700">
                        <span class="mr-2">✓</span>
                        <span class="text-sm">Semua Fasilitas Standar</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <span class="mr-2">✓</span>
                        <span class="text-sm">Mini Bar</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <span class="mr-2">✓</span>
                        <span class="text-sm">Bathtub & Balkon</span>
                    </div>
                </div>

                <div class="border-t pt-6">
                    <div class="flex items-baseline justify-center mb-6">
                        <span class="text-4xl font-bold text-yellow-600">Rp 5.000.000</span>
                        <span class="text-gray-500 ml-2">/ malam</span>
                    </div>
                    <a href="{{ route('bookings.create') }}" class="block w-full bg-gradient-to-r from-yellow-500 to-yellow-600 text-gray-900 text-center px-6 py-4 rounded-xl font-bold hover:from-yellow-600 hover:to-yellow-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>

        {{-- Kamar Family --}}
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden group hover:shadow-2xl transition-all duration-300">
            <div class="relative overflow-hidden">
                <img src="{{ asset('images/family.jpg') }}" alt="Family" class="h-64 w-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute top-4 right-4 bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                    Premium
                </div>
            </div>
            <div class="p-8">
                <h5 class="text-3xl font-bold mb-3 text-gray-800">Kamar Family</h5>
                <p class="text-gray-600 mb-6 leading-relaxed">Eksklusif & mewah untuk pengalaman menginap terbaik bersama keluarga.</p>
                
                {{-- Fasilitas --}}
                <div class="mb-6 space-y-2">
                    <div class="flex items-center text-gray-700">
                        <span class="mr-2">✓</span>
                        <span class="text-sm">Semua Fasilitas Deluxe</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <span class="mr-2">✓</span>
                        <span class="text-sm">Ruang Tamu Terpisah</span>
                    </div>
                    <div class="flex items-center text-gray-700">
                        <span class="mr-2">✓</span>
                        <span class="text-sm">2 Kamar Tidur</span>
                    </div>
                </div>

                <div class="border-t pt-6">
                    <div class="flex items-baseline justify-center mb-6">
                        <span class="text-4xl font-bold text-purple-600">Rp 7.000.000</span>
                        <span class="text-gray-500 ml-2">/ malam</span>
                    </div>
                    <a href="{{ route('bookings.create') }}" class="block w-full bg-gradient-to-r from-purple-600 to-purple-700 text-white text-center px-6 py-4 rounded-xl font-semibold hover:from-purple-700 hover:to-purple-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection