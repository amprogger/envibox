<?php

namespace App\Providers;

use App\Factories\SaveForm\SaveFormFactory;
use App\Factories\SaveForm\SaveToDatabaseFactory;
use App\Factories\SaveForm\SaveToFileFactory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SaveFormFactory::class, SaveToFileFactory::class);
        //$this->app->bind(SaveFormFactory::class, SaveToDatabaseFactory::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
