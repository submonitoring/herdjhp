<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function companyCodes()
    {
        return $this->hasMany(CompanyCode::class);
    }

    public function salesOrganizations()
    {
        return $this->hasMany(SalesOrganization::class);
    }

    use log;
}
