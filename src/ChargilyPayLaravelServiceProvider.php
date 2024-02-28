<?php

namespace KaraOdin\ChargilyPayLaravel;

use KaraOdin\ChargilyPayLaravel\Commands\ChargilyPayLaravelCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ChargilyPayLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('chargily-pay-laravel')
            ->hasConfigFile('chargily-pay-laravel')
            ->hasViews()
            ->hasMigration('create_chargily-pay-laravel_table')
            ->hasCommand(ChargilyPayLaravelCommand::class);
    }
}
