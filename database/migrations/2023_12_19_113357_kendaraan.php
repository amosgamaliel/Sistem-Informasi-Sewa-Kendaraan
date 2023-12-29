<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_kendaraan_id');
            $table->string('model_kendaraan');
            $table->string('merk_kendaraan');
            $table->string('nomor_polisi');
            $table->string('nomor_rangka');
            $table->string('nomor_mesin');
            $table->integer('tahun_pembuatan');
            $table->integer('harga_sewa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
