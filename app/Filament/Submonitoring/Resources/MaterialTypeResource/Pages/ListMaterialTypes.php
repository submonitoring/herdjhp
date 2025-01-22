<?php

namespace App\Filament\Submonitoring\Resources\MaterialTypeResource\Pages;

use App\Filament\Submonitoring\Resources\MaterialTypeResource;
use App\listpage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaterialTypes extends ListRecords
{
    protected static string $resource = MaterialTypeResource::class;

    use listpage;
}
