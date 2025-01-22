<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Navigation\NavigationGroup;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\MaxWidth;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Kenepa\ResourceLock\ResourceLockPlugin;
use pxlrbt\FilamentSpotlight\SpotlightPlugin;
use Rmsramos\Activitylog\ActivitylogPlugin;

class SubmonitoringPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('submonitoring')
            ->path('submonitoring')
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => Color::Blue,
                'primary' => Color::Red,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->font('SF Pro Display')
            ->discoverResources(in: app_path('Filament/Submonitoring/Resources'), for: 'App\\Filament\\Submonitoring\\Resources')
            ->discoverPages(in: app_path('Filament/Submonitoring/Pages'), for: 'App\\Filament\\Submonitoring\\Pages')
            ->discoverClusters(in: app_path('Filament/Submonitoring/Clusters'), for: 'App\\Filament\\Submonitoring\\Clusters')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Submonitoring/Widgets'), for: 'App\\Filament\\Submonitoring\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigationGroups([

                NavigationGroup::make()
                    ->label('Sales Order')
                    ->icon('heroicon-o-shopping-bag')
                    ->collapsed(),



                NavigationGroup::make()
                    ->label('Organizational Structures')
                    ->icon('heroicon-o-rectangle-group')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Material Document')
                    ->icon('heroicon-o-document')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Master Data')
                    ->icon('heroicon-o-circle-stack')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Basic Settings')
                    ->icon('heroicon-o-wrench')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Configuration')
                    ->icon('heroicon-o-adjustments-horizontal')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Number Range')
                    ->icon('heroicon-o-numbered-list')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('System General')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('System')
                    ->icon('heroicon-o-rectangle-group')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Manage Users')
                    ->icon('heroicon-o-user-group')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Logs')
                    ->icon('heroicon-o-stop')
                    ->collapsed(),

            ])
            ->sidebarCollapsibleOnDesktop()
            ->unsavedChangesAlerts()
            ->databaseNotifications()
            // ->topNavigation()
            // ->breadcrumbs(false)
            ->maxContentWidth(MaxWidth::Full)
            ->userMenuItems([
                MenuItem::make()
                    ->label('Profile')
                    ->url('/user/profile')
                    ->icon('heroicon-o-cog-6-tooth'),
            ])
            ->brandLogo(asset('/logojhp/Logo JHP HD.png'))
            ->favicon(asset('favicon-32x32.png'))
            ->brandName('JHP System')
            ->plugins([
                ActivitylogPlugin::make()
                    ->authorize(
                        fn() => auth()->user()->id === 1
                    ),
                ResourceLockPlugin::make(),
                SpotlightPlugin::make(),
            ])
            ->viteTheme('resources/css/filament/submonitoring/theme.css');
    }
}
