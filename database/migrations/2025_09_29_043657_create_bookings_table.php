<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('jenis_kelamin');
        $table->string('no_identitas', 16);
        $table->string('tipe_kamar');
        $table->integer('harga');
        $table->date('tanggal_pesan');
        $table->integer('durasi');
        $table->boolean('breakfast')->default(false);
        $table->integer('total');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
