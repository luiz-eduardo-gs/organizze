<?php

declare(strict_types=1);

namespace Core\Classification\Infrastructure\Provider;

use Core\Classification\Domain\Repository\CategoryRepositoryInterface;
use Core\Classification\Infrastructure\Repository\MySql\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class ClassificationServiceProvider extends ServiceProvider
{
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
        $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migration/');

        $this->bindInterfaces();
    }

    private function bindInterfaces(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
    }
}
