<?php

namespace App\Filament\Resources\Events\Pages;

use App\Filament\Resources\Events\EventResource;
use Filament\Resources\Pages\Page;

class ViewEvent extends Page
{
    protected static string $resource = EventResource::class;

    protected string $view = 'filament.resources.events.pages.view-event';
}
