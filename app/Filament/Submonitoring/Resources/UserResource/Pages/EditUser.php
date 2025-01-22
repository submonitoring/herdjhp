<?php

namespace App\Filament\Submonitoring\Resources\UserResource\Pages;

use App\editpage;
use App\Filament\Submonitoring\Resources\UserResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Kenepa\ResourceLock\Resources\Pages\Concerns\UsesResourceLock;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    use editpage;
}
