<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class MaterialType extends Model
{
    public function numberRange()
    {
        return $this->belongsTo(NumberRange::class);
    }

    use log;
}
