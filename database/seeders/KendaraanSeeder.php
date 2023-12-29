<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kendaraans')->insert([
            'tipe_kendaraan_id' => 'Mobil',
            'model_kendaraan' => 'Toyota',
            'nomor_mesin' => '12345',
            'nomor_rangka' => '223344',
            'merk_kendaraan' => 'Toyota',
            'nomor_polisi' => 'D 1213',
            'tahun_pembuatan' => '2020',
            'harga_sewa' => '300000',
        ]);
    }
}
