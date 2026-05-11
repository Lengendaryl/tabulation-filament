<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
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
            ->viteTheme(['resources/css/app.css', 'resources/css/filament/admin/theme.css'])
            ->topNavigation()
            // This forces Filament to use your CSS
            // ->renderHook(
            //     'panels::head.start',
            //     fn(): string => Blade::render('@fluxAppearance'),
            // )
            ->renderHook(
                'panels::body.end',
                fn(): string => Blade::render('@fluxScripts'),
            )
            ->path('judge')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Judge/Resources'), for: 'App\Filament\Judge\Resources')
            ->discoverPages(in: app_path('Filament/Judge/Pages'), for: 'App\Filament\Judge\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Judge/Widgets'), for: 'App\Filament\Judge\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
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
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
