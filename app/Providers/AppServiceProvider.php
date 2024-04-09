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
            $panelSwitch->simple()
            ->labels([
                'admin' => 'Custom Admin Label',
                'general_manager' => __('General Manager')
            ])
            ->icons([
                'validPanelId1' => 'heroicon-o-square-2-stack',
                'validPanelId2' => 'heroicon-o-star',
            ], $asImage = false);
        });

        //
    }
}
