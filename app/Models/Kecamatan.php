<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function kelurahans()
    {
        return $this->hasMany(Kelurahan::class);
    }

    public function allKodepos()
    {
        return $this->hasMany(Kodepos::class);
    }

    use log;
}
