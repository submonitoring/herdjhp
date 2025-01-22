<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{

    public function bpCategories()
    {
        return $this->belongsToMany(BpCategory::class);
    }

    use log;
}
