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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->foreignId('type_id')->constrained('types')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('warna');
            $table->string('tahun');
            $table->integer('harga');
            $table->string('deskripsi');
            $table->string('plat_nomor')->nullable();
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
        Schema::dropIfExists('kendaraans');
    }
};
