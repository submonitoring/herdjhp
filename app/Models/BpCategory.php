<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class BpCategory extends Model
{

    public function titles()
    {
        return $this->belongsToMany(Title::class);
    }

    use log;
}
