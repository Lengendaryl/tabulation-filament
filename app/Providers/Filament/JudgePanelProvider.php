<?php

namespace App\Providers\Filament;

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
use Filament\Support\Enums\Width;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Blade;

class JudgePanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('judge')
            ->bootUsing(function () {
                Notifications::alignment(Alignment::Center);
                Notifications::verticalAlignment(VerticalAlignment::Center);
            })
            ->topNavigation()
            ->path('')
            ->login()
            ->maxContentWidth(Width::Full)
            ->plugins([
                AuthDesignerPlugin::make()
                    ->login(
                        fn($config) => $config
                            ->media(asset('asset/bisu_building.jpg'))
                            ->mediaPosition(MediaPosition::Left)
                            ->mediaSize('50%')
                    )
            ])
            ->renderHook(
                'panels::head.end',
                fn() => Blade::render('@vite(["resources/js/app.js"])')
            )
            ->discoverResources(in: app_path('Filament/Judge/Resources'), for: 'App\Filament\Judge\Resources')
            ->discoverPages(in: app_path('Filament/Judge/Pages'), for: 'App\Filament\Judge\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Judge/Widgets'), for: 'App\Filament\Judge\Widgets')
            ->widgets([
                AccountWidget::class,
            ])
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
            ])->viteTheme(['resources/css/filament/admin/theme.css', 'resources/css/app.css'])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
