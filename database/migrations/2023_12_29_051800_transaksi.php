<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kendaraan_id')->constrained('kendaraans')->onDelete('cascade');
            $table->foreignId('pelanggan_id')->constrained('pelanggans')->onDelete('cascade');
            $table->date('tanggal_sewa');
            $table->integer('lama_sewa');
            $table->integer('total_bayar');
            $table->integer('opsi')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
        
    }
};
