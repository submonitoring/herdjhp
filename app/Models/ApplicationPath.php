<?php

namespace App\Models;

use App\log;
use Illuminate\Database\Eloquent\Model;

class ApplicationPath extends Model
{
    public function applicationName()
    {
        return $this->belongsTo(ApplicationName::class);
    }

    public function moduleAaa()
    {
        return $this->belongsTo(ModuleAaa::class);
    }

    public function moduleBaa()
    {
        return $this->belongsTo(ModuleBaa::class);
    }

    public function moduleCaa()
    {
        return $this->belongsTo(ModuleCaa::class);
    }

    public function moduleActivityType()
    {
        return $this->belongsTo(ModuleActivityType::class);
    }

    public function moduleActivity()
    {
        return $this->belongsTo(ModuleActivity::class);
    }

    use log;
}
