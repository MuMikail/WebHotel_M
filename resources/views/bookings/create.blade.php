@extends('layouts.app')

@section('content')
{{-- Header Section --}}
<div class="bg-gradient-to-r from-blue-600 to-purple-700 py-16 mb-12">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-5xl font-bold text-white mb-4">Pesan Kamar</h1>
        <p class="text-xl text-white opacity-90">Lengkapi formulir di bawah untuk reservasi kamar Anda</p>
    </div>
</div>

<div class="container mx-auto px-6 pb-16">
    <div class="max-w-4xl mx-auto">
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-800 rounded-lg flex items-center">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="font-semibold">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            {{-- Progress Bar --}}
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-6">
                <div class="flex justify-between items-center text-white">
                    <div class="text-center flex-1">
                        <div class="w-10 h-10 bg-white text-blue-600 rounded-full flex items-center justify-center font-bold mx-auto mb-2">1</div>
                        <p class="text-sm font-semibold">Data Diri</p>
                    </div>
                    <div class="flex-1 h-1 bg-white/30 mx-2"></div>
                    <div class="text-center flex-1">
                        <div class="w-10 h-10 bg-white/30 text-white rounded-full flex items-center justify-center font-bold mx-auto mb-2">2</div>
                        <p class="text-sm font-semibold">Pilih Kamar</p>
                    </div>
                    <div class="flex-1 h-1 bg-white/30 mx-2"></div>
                    <div class="text-center flex-1">
                        <div class="w-10 h-10 bg-white/30 text-white rounded-full flex items-center justify-center font-bold mx-auto mb-2">3</div>
                        <p class="text-sm font-semibold">Konfirmasi</p>
                    </div>
                </div>
            </div>

            <form action="{{ route('bookings.store') }}" method="POST" class="p-8" id="bookingForm">
                @csrf

                {{-- Data Diri Section --}}
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <span class="bg-blue-100 text-blue-600 w-8 h-8 rounded-full flex items-center justify-center mr-3">👤</span>
                        Data Pemesan
                    </h2>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Nama -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" name="nama" class="w-full border-2 border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Masukkan nama lengkap" required>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-2">Jenis Kelamin <span class="text-red-500">*</span></label>
                            <select name="jenis_kelamin" class="w-full border-2 border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <!-- Nomor Identitas -->
                        <div class="md:col-span-2">
                            <label class="block font-semibold text-gray-700 mb-2">Nomor Identitas<span class="text-red-500">*</span></label>
                            <input type="text" name="no_identitas" maxlength="16" class="w-full border-2 border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="16 digit nomor identitas" required>
                            <p class="text-sm text-gray-500 mt-1 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Harus 16 digit angka
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Detail Kamar Section --}}
                <div class="mb-8 pt-8 border-t-2 border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <span class="bg-purple-100 text-purple-600 w-8 h-8 rounded-full flex items-center justify-center mr-3">🛏️</span>
                        Detail Pemesanan
                    </h2>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Tipe Kamar -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-2">Tipe Kamar <span class="text-red-500">*</span></label>
                            <select name="tipe_kamar" id="tipe_kamar" class="w-full border-2 border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition" required>
                                <option value="">-- Pilih Tipe Kamar --</option>
                                <option value="Standar">Standar - Rp 3.000.000</option>
                                <option value="Deluxe">Deluxe - Rp 5.000.000</option>
                                <option value="Family">Family - Rp 7.000.000</option>
                            </select>
                        </div>

                        <!-- Harga -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-2">Harga per Malam</label>
                            <input type="text" name="harga" id="harga" class="w-full border-2 border-gray-200 bg-gray-50 rounded-lg px-4 py-3 text-blue-600 font-bold text-lg" readonly placeholder="Pilih tipe kamar dulu">
                        </div>

                        <!-- Tanggal Pesan -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-2">Tanggal Check-in <span class="text-red-500">*</span></label>
                            <input type="date" name="tanggal_pesan" class="w-full border-2 border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition" required>
                        </div>

                        <!-- Durasi -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-2">Durasi Menginap (hari) <span class="text-red-500">*</span></label>
                            <input type="number" name="durasi" id="durasi" min="1" class="w-full border-2 border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition" placeholder="Berapa hari?" required>
                            <p class="text-sm text-green-600 mt-1 font-semibold flex items-center">
                                🎉 Diskon 10% untuk menginap lebih dari 3 hari!
                            </p>
                        </div>
                    </div>

                    <!-- Breakfast -->
                    <div class="mt-6 p-4 bg-yellow-50 border-2 border-yellow-200 rounded-lg">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" name="breakfast" id="breakfast" class="w-5 h-5 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500 mr-3">
                            <div class="flex-1">
                                <span class="font-semibold text-gray-800">Tambah Paket Breakfast</span>
                                <p class="text-sm text-gray-600">Menu sarapan prasmanan dengan berbagai pilihan</p>
                            </div>
                            <span class="font-bold text-yellow-600">+ Rp 80.000</span>
                        </label>
                    </div>
                </div>

                {{-- Total Section --}}
                <div class="mb-8 pt-8 border-t-2 border-gray-100">
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-6 border-2 border-green-200">
                        <label class="block font-semibold text-gray-700 mb-3 text-lg">Total Pembayaran</label>
                        <input type="text" name="total" id="total" class="w-full border-0 bg-white rounded-lg px-4 py-4 text-green-600 font-bold text-3xl text-center shadow-lg" readonly placeholder="Klik tombol hitung">
                        <p class="text-sm text-gray-600 text-center mt-2">* Sudah termasuk diskon (jika ada)</p>
                    </div>
                </div>

                {{-- Tombol --}}
                <div class="grid md:grid-cols-2 gap-4">
                    <!-- Tombol Hitung -->
                    <button type="button" id="hitungBtn" class="w-full bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white font-bold py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                        Hitung Total Bayar
                    </button>

                    <!-- Submit -->
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Konfirmasi Pemesanan
                    </button>
                </div>

                <p class="text-center text-gray-500 text-sm mt-6">
                    Dengan memesan, Anda menyetujui syarat dan ketentuan HotelKu
                </p>
            </form>
        </div>

        {{-- Info Tambahan --}}
        <div class="mt-8 grid md:grid-cols-3 gap-4">
            <div class="bg-blue-50 p-4 rounded-lg text-center">
                <div class="text-3xl mb-2">✅</div>
                <p class="font-semibold text-gray-800">Pembatalan Gratis</p>
                <p class="text-sm text-gray-600">Hingga 24 jam sebelum check-in</p>
            </div>
            <div class="bg-purple-50 p-4 rounded-lg text-center">
                <div class="text-3xl mb-2">💳</div>
                <p class="font-semibold text-gray-800">Pembayaran Aman</p>
                <p class="text-sm text-gray-600">Transaksi dijamin aman</p>
            </div>
            <div class="bg-green-50 p-4 rounded-lg text-center">
                <div class="text-3xl mb-2">🎁</div>
                <p class="font-semibold text-gray-800">Diskon Spesial</p>
                <p class="text-sm text-gray-600">Untuk menginap lebih lama</p>
            </div>
        </div>
    </div>
</div>

<script>
    // Fungsi format rupiah tetap sama
    function formatRupiah(angka) {
        return "Rp " + angka.toLocaleString('id-ID');
    }

    document.getElementById('tipe_kamar').addEventListener('change', function() {
        let hargaInput = document.getElementById('harga');
        let harga = 0;

        if (this.value === "Standar") harga = 3000000;
        else if (this.value === "Deluxe") harga = 5000000;
        else if (this.value === "Family") harga = 7000000;

        hargaInput.value = harga ? formatRupiah(harga) : "";
    });

    document.getElementById('hitungBtn').addEventListener('click', function() {
        let harga = parseInt(document.getElementById('harga').value.replace(/Rp\s?/g, '').replace(/\./g, '')) || 0;
        let durasi = parseInt(document.getElementById('durasi').value) || 0;
        let breakfast = document.getElementById('breakfast').checked;

        if (!harga || !durasi) {
            alert('Harap pilih tipe kamar dan masukkan durasi menginap!');
            return;
        }

        let total = harga * durasi;

        if (durasi > 3) {
            total = total - (total * 0.1);
        }

        if (breakfast) {
            total += 80000 * durasi;
        }

        document.getElementById('total').value = formatRupiah(total);
    });

    // Validasi Nomor Identitas sebelum submit
    document.getElementById('bookingForm').addEventListener('submit', function(e) {
        let noIdentitas = document.querySelector('input[name="no_identitas"]').value.trim();
        if (noIdentitas.length !== 16 || isNaN(noIdentitas)) {
            e.preventDefault(); // hentikan submit
            alert('Nomor Identitas harus terdiri dari 16 digit angka!');
        }
    });
</script>

@endsection