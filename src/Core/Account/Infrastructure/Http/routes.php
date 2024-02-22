<?php

declare(strict_types=1);

use Core\Account\Infrastructure\Http\Controller\Category\Create\CreateAccountController;
use Core\Account\Infrastructure\Http\Controller\Category\List\ListAccountController;
use Core\Account\Infrastructure\Http\Controller\CreditCard\Create\CreateCreditCardController;
use Core\Account\Infrastructure\Http\Controller\CreditCard\List\ListCreditCardController;
use Illuminate\Support\Facades\Route;

Route::prefix('accounts')->group(function () {
    Route::get('/', ListAccountController::class)->name('accounts.index');
    Route::post('/', CreateAccountController::class)->name('accounts.store');
});

Route::prefix('credit-cards')->group(function () {
    Route::get('/', ListCreditCardController::class)->name('credit-cards.index');
    Route::post('/', CreateCreditCardController::class)->name('credit-cards.store');
});
