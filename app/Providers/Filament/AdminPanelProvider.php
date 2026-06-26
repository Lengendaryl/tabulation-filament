<?php

namespace App\Providers\Filament;

use AchyutN\FilamentLogViewer\FilamentLogViewer;
use AlizHarb\ActivityLog\ActivityLogPlugin;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Caresome\FilamentAuthDesigner\AuthDesignerPlugin;
use Caresome\FilamentAuthDesigner\Enums\MediaPosition;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Notifications\Livewire\Notifications;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\VerticalAlignment;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Support\Enums\Width;
use Illuminate\Support\Facades\Blade;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->bootUsing(function () {
                Notifications::alignment(Alignment::Center);
                Notifications::verticalAlignment(VerticalAlignment::Center);
            })
            ->path('admin')
            ->maxContentWidth(Width::Full)
            ->viteTheme(['resources/css/filament/admin/theme.css', 'resources/css/app.css'])
            ->renderHook(
                'panels::head.end',
                fn() => Blade::render('@vite(["resources/js/app.js"])')
            )
            ->topNavigation()
            ->login()
            ->registration()
            ->plugins([
                FilamentLogViewer::make()->navigationLabel('System Logs')->navigationGroup('System'),
                // FilamentEnvEditorPlugin::make(),
                FilamentShieldPlugin::make()
                    ->gridColumns([
                        'default' => 1,
                        'sm' => 4,
                        'lg' => 6
                    ])
                    ->sectionColumnSpan(1)
                    ->checkboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 4,
                    ])
                    ->resourceCheckboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                    ])->navigationGroup('System'),
                AuthDesignerPlugin::make()
                    ->defaults(
                        fn($config) => $config
                            ->media(asset('asset/bisu_building.jpg'))
                            ->mediaPosition(MediaPosition::Left)
                            ->mediaSize('50%')
                    )->login()
                    ->registration(),
                ActivityLogPlugin::make()
                    ->label('Log')
                    ->pluralLabel('Tabulation Logs')
                    ->navigationGroup('System'),

            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->discoverClusters(in: app_path('Filament/Clusters'), for: 'App\\Filament\\Clusters')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])->colors([
                'primary' => [
                    50 => '#f4effa',
                    100 => '#e6dbf4',
                    200 => '#cbb7e9',
                    300 => '#b093de',
                    400 => '#8a5fd0',
                    500 => '#45226b',
                    600 => '#3d1f60',
                    700 => '#341a52',
                    800 => '#2b1544',
                    900 => '#221037',
                    950 => '#160a24',
                ],
            ]);
    }
}
