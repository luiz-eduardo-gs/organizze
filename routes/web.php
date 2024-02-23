<?php

declare(strict_types=1);

use Core\Account\Application\Account\GetAll\GetAllAccountsUseCase;
use Core\Account\Application\CreditCard\GetAll\GetAllCreditCardsUseCase;
use Core\Classification\Application\Category\GetAll\GetAllCategoriesUseCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $accounts = app(GetAllAccountsUseCase::class)->execute();
    $creditCards = app(GetAllCreditCardsUseCase::class)->execute();
    $categories = app(GetAllCategoriesUseCase::class)->execute();
    return view('app', compact('accounts', 'creditCards', 'categories'));
});

Route::post('/expense', function (Request $request) {
    dd($request->all());
})->name('expenses.store');

Route::get('/transactions', function () {
    return view('transactions');
})->name('transactions');
