<?php

namespace App\Providers;

use BezhanSalleh\PanelSwitch\PanelSwitch;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        if (env('FORCE_HTTPS', false)) {
            URL::forceScheme('https');
        }

        FilamentAsset::register([
            Css::make('katex-css', 'https://cdn.jsdelivr.net/npm/katex@0.16.19/dist/katex.min.css'),
            Js::make('katex-js', 'https://cdn.jsdelivr.net/npm/katex@0.16.19/dist/katex.min.js'),
        ]);

        PanelSwitch::configureUsing(function (PanelSwitch $panelSwitch) {
            $panelSwitch->icons([
                'admin' => 'heroicon-o-identification',
                'teacher' => 'heroicon-o-user',
                'student' => 'heroicon-o-user-group',
            ], $asImage = false)
            ->canSwitchPanels(fn (): bool => Auth::user()->hasRole('super_admin'))
            ->visible(fn (): bool => Auth::user()->hasRole('super_admin'))
            ->iconSize(20)
            ->simple();
        });
    }
}
