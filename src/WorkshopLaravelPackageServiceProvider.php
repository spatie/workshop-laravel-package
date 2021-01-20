<?php

namespace Spatie\WorkshopLaravelPackage;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Spatie\WorkshopLaravelPackage\Commands\ShowTextCommand;
use Spatie\WorkshopLaravelPackage\Http\Controllers\DemoController;

class WorkshopLaravelPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/workshop-laravel-package.php' => config_path('workshop-laravel-package.php'),
            ], 'workshop-config');

            $this->publishes([
               __DIR__ . '/../resources/views' => base_path('resources/views/vendor/workshop-laravel-package'),
           ], 'workshop-laravel-package-views');


           $migrationFileName = 'create_posts_table.php';
           if (! $this->migrationFileExists($migrationFileName)) {
               $this->publishes([
                   __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
               ], 'workshop-laravel-package-migrations');
           }

            $this->commands([
                ShowTextCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'workshop-laravel-package');

        Route::macro('myPackage', function (string $prefix = 'demo') {
            Route::get($prefix, [DemoController::class, 'show']);
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/workshop-laravel-package.php', 'workshop-laravel-package');
    }


    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
