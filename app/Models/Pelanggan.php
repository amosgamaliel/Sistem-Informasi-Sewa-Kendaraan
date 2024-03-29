<?php

namespace App\Models;

use App\Models\Membership;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function membership()
    {
        return $this->belongsTo(Membership::class,'membership_id','id');
    }
}
