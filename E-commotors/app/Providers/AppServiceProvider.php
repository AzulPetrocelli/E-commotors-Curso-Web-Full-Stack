<?php

namespace App\Providers;

use App\Models\Accesorio;
use App\Models\Moto;
use App\Models\Marca;
use App\Models\Categoria;
use Illuminate\Support\Facades\View;
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
    public function boot()
{
    View::composer('*', function ($view) {
        $view->with('categorias', Categoria::all());
    });

    View::composer('*', function ($view) {
        $view->with('marcas', Marca::all());
    });

    View::composer('*', function ($view) {
        $view->with('motos', Moto::paginate(6));
    });

    View::composer('*', function ($view) {
        $view->with('accesorios', Accesorio::all());
    });
}
}
