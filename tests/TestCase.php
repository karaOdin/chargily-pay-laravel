<?php

namespace KaraOdin\ChargilyPayLaravel\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use KaraOdin\ChargilyPayLaravel\ChargilyPayLaravelServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'KaraOdin\\ChargilyPayLaravel\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ChargilyPayLaravelServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_chargily-pay-laravel_table.php.stub';
        $migration->up();
        */
    }
}
