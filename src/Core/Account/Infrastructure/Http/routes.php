<?php

declare(strict_types=1);

use Core\Account\Infrastructure\Http\Controller\Category\Create\CreateAccountController;
use Core\Account\Infrastructure\Http\Controller\Category\List\ListAccountController;
use Illuminate\Support\Facades\Route;

Route::prefix('accounts')->group(function () {
    Route::get('/', ListAccountController::class)->name('accounts.index');
    Route::post('/', CreateAccountController::class)->name('accounts.store');
});
