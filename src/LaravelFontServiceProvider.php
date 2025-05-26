<?php

namespace Apsonex\LaravelFont;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelFontServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-font');
    }

    public function registeringPackage(): void
    {
        $this->app->singleton('laravelfont', function () {
            return new LaravelFont(new \Apsonex\Font\Font());
        });
    }
}
