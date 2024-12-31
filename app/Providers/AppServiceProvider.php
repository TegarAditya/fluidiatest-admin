<?php

namespace App\Providers;

use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
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
    }
}
