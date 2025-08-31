<?php

namespace App\Providers;

use App\Repositories\Curso\CursoEloquent;
use App\Repositories\Curso\CursoRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        CursoRepository::class => CursoEloquent::class,
    ];
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}