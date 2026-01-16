<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CharacterRepository;
use App\Repositories\Interfaces\CharacterRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    private const BINDING = [
        CharacterRepositoryInterface::class => CharacterRepository::class,
    ];



    public function register(): void
    {
        foreach (self::BINDING as $abstract => $concrete) {
            $this->app->bind($abstract, $concrete);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
