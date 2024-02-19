<?php

declare(strict_types=1);

use Core\Classification\Infrastructure\Http\Controller\Category\Create\CreateCategoryController;
use Core\Classification\Infrastructure\Http\Controller\Category\List\ListCategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('categories')->group(function () {
    Route::get('/', ListCategoryController::class)->name('categories.index');
    Route::post('/', CreateCategoryController::class)->name('categories.store');
});
