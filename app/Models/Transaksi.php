<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
    
    public function denda()
    {
        return $this->hasOne(Denda::class);
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
