<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings'; // pastikan nama tabel sama dengan migration

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'no_identitas',
        'tipe_kamar',
        'harga',
        'tanggal_pesan',
        'durasi',
        'breakfast',
        'total',
    ];

    // casting otomatis ke integer/boolean
    protected $casts = [
        'harga' => 'integer',
        'durasi' => 'integer',
        'total' => 'integer',
        'breakfast' => 'boolean',
        'tanggal_pesan' => 'date',
    ];
}
