<?php

declare(strict_types=1);

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
    return view('app');
});

Route::get('/transactions', function () {
    return view('transactions');
})->name('transactions');

Route::get('/accounts', function () {
    return view('accounts.index');
})->name('accounts.index');

Route::get('/cards', function () {
    return view('credit-cards.index');
})->name('cards');
