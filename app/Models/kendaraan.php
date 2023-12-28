<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'tipe_kendaraan_id',
        'model_kendaraan',
        'nomor_mesin',
        'nomor_rangka',
        'merk_kendaraan',
        'nomor_polisi',
        'tahun_pembuatan',
        'harga_sewa',
    ];
}
