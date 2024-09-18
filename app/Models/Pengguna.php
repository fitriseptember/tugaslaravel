<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function ktp()
    {
        return $this->hasOne(ktp::class);//memiliki
    }
}
