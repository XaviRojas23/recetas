<?php

namespace App\Providers;
use View;
use App\Models\CategoriaReceta;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class CategoriasProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $categorias = CategoriaReceta::all();
            $view->with('categorias', $categorias);
        });
    }
}
