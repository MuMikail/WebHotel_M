@extends('layouts.app')

@section('content')
<div class="relative w-full min-h-screen bg-cover bg-center flex items-center justify-center overflow-hidden -mb-16" style="background-image: url('{{ asset('images/standar.jpg') }}');">
    {{-- Overlay gradient --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div>
    
    {{-- Animated particles effect (optional) --}}
    <div class="absolute inset-0 opacity-20">
        <div class="absolute w-2 h-2 bg-white rounded-full top-1/4 left-1/4 animate-pulse"></div>
        <div class="absolute w-1 h-1 bg-white rounded-full top-1/3 right-1/3 animate-pulse delay-100"></div>
        <div class="absolute w-2 h-2 bg-white rounded-full bottom-1/4 right-1/4 animate-pulse delay-200"></div>
    </div>
    
    {{-- Konten tengah --}}
    <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
        {{-- Badge --}}
        <div class="inline-block mb-6 animate-fade-in">
            <span class="bg-yellow-500/90 backdrop-blur-sm text-gray-900 px-6 py-2 rounded-full text-sm font-bold uppercase tracking-wider shadow-lg">
                Hotel Terbaik 2025
            </span>
        </div>

        {{-- Main Heading --}}
        <h1 class="text-5xl md:text-7xl font-extrabold mb-6 drop-shadow-2xl leading-tight animate-slide-up">
            Selamat Datang di <span class="text-yellow-400">HotelKu</span>
        </h1>
        
        {{-- Subtitle --}}
        <p class="text-xl md:text-2xl mb-8 font-light drop-shadow-lg max-w-2xl mx-auto leading-relaxed animate-slide-up delay-100">
            Pengalaman Menginap yang Tak Terlupakan dengan Pelayanan Terbaik & Fasilitas Premium
        </p>

        {{-- Features Quick Info --}}
        <div class="flex flex-wrap justify-center gap-6 mb-10 animate-slide-up delay-200">
            <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span class="text-sm font-semibold">WiFi Gratis</span>
            </div>
            <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span class="text-sm font-semibold">Kolam Renang</span>
            </div>
            <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span class="text-sm font-semibold">Breakfast</span>
            </div>
            <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span class="text-sm font-semibold">Layanan 24 Jam</span>
            </div>
        </div>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row gap-4 justify-center animate-slide-up delay-300">
            <a href="{{ route('produk') }}" class="group inline-flex items-center justify-center bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-10 py-4 rounded-xl text-lg font-bold transition-all duration-300 hover:scale-105 shadow-2xl hover:shadow-yellow-500/50">
                <span>Lihat Kamar Kami</span>
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
            <a href="{{ route('bookings.create') }}" class="inline-flex items-center justify-center bg-white/10 backdrop-blur-md hover:bg-white/20 text-white px-10 py-4 rounded-xl text-lg font-bold transition-all duration-300 hover:scale-105 shadow-2xl border-2 border-white/30">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <span>Pesan Sekarang</span>
            </a>
        </div>

        {{-- Rating --}}
        <div class="mt-12 flex items-center justify-center gap-8 animate-fade-in delay-400">
            <div class="text-center">
                <div class="flex items-center justify-center mb-1">
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                </div>
                <p class="text-sm font-semibold">Rating 4.8/5</p>
            </div>
            <div class="h-8 w-px bg-white/30"></div>
            <div class="text-center">
                <p class="text-2xl font-bold">1000+</p>
                <p class="text-sm">Tamu Senang</p>
            </div>
            <div class="h-8 w-px bg-white/30"></div>
            <div class="text-center">
                <p class="text-2xl font-bold">10+</p>
                <p class="text-sm">Tahun Berpengalaman</p>
            </div>
        </div>
    </div>

    {{-- Scroll Down Indicator --}}
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </div>
</div>

<style>
    @keyframes fade-in {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes slide-up {
        from { 
            opacity: 0;
            transform: translateY(30px);
        }
        to { 
            opacity: 1;
            transform: translateY(0);
        }
    }
    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }
    .animate-slide-up {
        animation: slide-up 0.8s ease-out;
    }
    .delay-100 {
        animation-delay: 0.1s;
    }
    .delay-200 {
        animation-delay: 0.2s;
    }
    .delay-300 {
        animation-delay: 0.3s;
    }
    .delay-400 {
        animation-delay: 0.4s;
    }
</style>

@endsection