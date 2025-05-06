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
            Js::make('katex-auto-render', 'https://cdn.jsdelivr.net/npm/katex@0.16.19/dist/contrib/auto-render.min.js'),
            Js::make('katex-init', asset('js/katex-init.js')),
        ]);

        PanelSwitch::configureUsing(function (PanelSwitch $panelSwitch) {
            $panelSwitch->icons([
                'admin' => 'heroicon-o-identification',
                'teacher' => 'heroicon-o-user',
                'student' => 'heroicon-o-user-group',
            ], asImage: false)
                ->panels(function (): array {
                    if (! Auth::check()) {
                        return [];
                    }

                    if (Auth::user()->hasRole('super_admin')) {
                        return [
                            'admin',
                            'teacher',
                            'student',
                        ];
                    } elseif (Auth::user()->hasRole('teacher')) {
                        return [
                            'teacher',
                            'student',
                        ];
                    } else {
                        return [
                            'student',
                        ];
                    }
                })
                ->canSwitchPanels(fn (): bool => Auth::user()->hasRole('super_admin') || Auth::user()->hasRole('teacher'))
                ->visible(fn (): bool => Auth::user()->hasRole('super_admin'))
                ->iconSize(20)
                ->simple();
        });
    }
}
