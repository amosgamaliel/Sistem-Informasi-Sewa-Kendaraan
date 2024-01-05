<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membership extends Model
{
    use HasFactory;

    protected $connection="mysql_second";

    protected $guarded = [];

    public function pelanggan()
    {
        return $this->hasOne(Pelanggan::class);
    }
}
