<?php

namespace App\Providers\Filament;

use App\Filament\Jhpadmin\Widgets\Menu;
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

class JhpadminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('jhpadmin')
            ->path('jhpadmin')
            ->colors([
                'primary' => Color::Violet,
            ])
            ->discoverResources(in: app_path('Filament/Jhpadmin/Resources'), for: 'App\\Filament\\Jhpadmin\\Resources')
            ->discoverPages(in: app_path('Filament/Jhpadmin/Pages'), for: 'App\\Filament\\Jhpadmin\\Pages')
            ->discoverClusters(in: app_path('Filament/Jhpadmin/Clusters'), for: 'App\\Filament\\Jhpadmin\\Clusters')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Jhpadmin/Widgets'), for: 'App\\Filament\\Jhpadmin\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Menu::class,
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
                    ->label('Customizing')
                    ->icon('heroicon-o-adjustments-horizontal')
                    ->collapsed(),

                NavigationGroup::make()
                    ->label('Address Data')
                    ->icon('heroicon-o-map')
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
            ->maxContentWidth(MaxWidth::Full)
            ->userMenuItems([
                MenuItem::make()
                    ->label('Profile')
                    ->url('/user/profile')
                    ->icon('heroicon-o-cog-6-tooth'),
            ])
            ->brandLogo(asset('/logojhp/Logo JHP HD.png'))
            ->brandName('JHP Admin');
    }
}
