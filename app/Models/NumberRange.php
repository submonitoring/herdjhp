<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class NumberRange extends Model
{
    public function nrObject()
    {
        return $this->belongsTo(NrObject::class);
    }

    public function documentTypes()
    {
        return $this->hasMany(DocumentType::class);
    }

    use log;
}
