<?php

namespace App\Filament\Submonitoring\Resources\MaterialTypeResource\Pages;

use App\editpage;
use App\Filament\Submonitoring\Resources\MaterialTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaterialType extends EditRecord
{
    protected static string $resource = MaterialTypeResource::class;

    use editpage;
}
