<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use BezhanSalleh\PanelSwitch\PanelSwitch;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        PanelSwitch::configureUsing(function (PanelSwitch $panelSwitch) {
            $panelSwitch            
            ->simple()
            ->iconSize(8)
            ->labels([
                'admin'     => __('Administración'),                
                'store'     => __('Almacén'),  
                'booking'   => __('Reservas'),               
                'payments'  => __('Pagos'),                
                'style'     => __('Visualización')
            ])
            ->icons([
                'admin'     => 'heroicon-o-building-library',
                'store'     => 'heroicon-o-building-storefront',
                'booking'   => 'heroicon-o-bookmark-square',
                'payments'  => 'heroicon-o-banknotes',
                'style'     => 'heroicon-o-view-columns',
            ], $asImage = false);
        });

        //
    }
}
