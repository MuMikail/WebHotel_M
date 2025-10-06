<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // tampilkan form

// BookingController.php
public function index()
{
    $bookings = Booking::orderBy('created_at', 'desc')->get();
    return view('bookings.index', compact('bookings'));
}

public function show($id)
{
    $booking = Booking::findOrFail($id);
    return view('bookings.show', compact('booking'));
}

public function destroy($id)
{
    $booking = Booking::findOrFail($id);
    $booking->delete();
    return redirect()->route('bookings.index')->with('success', 'Data berhasil dihapus!');
}

    public function create()
    {
        return view('bookings.create');
    }

    // simpan data booking
public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string',
        'jenis_kelamin' => 'required',
        'no_identitas' => 'required|digits:16',
        'tipe_kamar' => 'required',
        'harga' => 'required',
        'tanggal_pesan' => 'required|date',
        'durasi' => 'required|numeric',
        'total' => 'required',
    ]);

    // Hilangkan "Rp" dan titik dari harga & total → jadi integer
    $harga = preg_replace('/[^0-9]/', '', $request->harga);
    $total = preg_replace('/[^0-9]/', '', $request->total);

    Booking::create([
        'nama' => $request->nama,
        'jenis_kelamin' => $request->jenis_kelamin,
        'no_identitas' => $request->no_identitas,
        'tipe_kamar' => $request->tipe_kamar,
        'harga' => $harga,
        'tanggal_pesan' => $request->tanggal_pesan,
        'durasi' => $request->durasi,
        'breakfast' => $request->has('breakfast'),
        'total' => $total,
    ]);

    return redirect()->route('bookings.index')->with('success', 'Pesanan berhasil disimpan!');
}


}
