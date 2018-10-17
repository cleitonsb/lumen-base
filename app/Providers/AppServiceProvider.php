<?php

namespace App\Providers;

use App\Repositories\CalculadoraRepositoryModelo1;
use App\Repositories\CalculadoraRepositoryModelo2;
use App\Repositories\Contracts\CalculadoraInterface;
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
        $this->app->bind(CalculadoraInterface::class, CalculadoraRepositoryModelo1::class);
        //$this->app->bind(CalculadoraInterface::class, CalculadoraRepositoryModelo2::class);
    }
}
