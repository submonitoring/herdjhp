<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function allKodepos()
    {
        return $this->hasMany(Kodepos::class);
    }

    use log;
}
