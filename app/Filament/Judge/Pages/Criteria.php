<?php

namespace App\Filament\Judge\Pages;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Schemas\Schema;

class Criteria extends Page
{
    protected string $view = 'filament.judge.pages.criteria';
    protected static bool $shouldRegisterNavigation = false;


    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                MarkdownEditor::make('content'),
                // ...
            ])
            ->statePath('data');
    }
}
