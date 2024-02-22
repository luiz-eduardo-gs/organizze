<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Provider;

use Core\Account\Domain\Repository\AccountRepositoryInterface;
use Core\Account\Domain\Repository\CreditCardRepositoryInterface;
use Core\Account\Infrastructure\Repository\MySql\AccountRepository;
use Core\Account\Infrastructure\Repository\MySql\CreditCardRepository;
use Illuminate\Support\ServiceProvider;

class AccountServiceProvider extends ServiceProvider
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
        $this->app->bind(AccountRepositoryInterface::class, AccountRepository::class);
        $this->app->bind(CreditCardRepositoryInterface::class, CreditCardRepository::class);
    }
}
