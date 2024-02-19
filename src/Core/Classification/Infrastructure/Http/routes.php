<?php

declare(strict_types=1);

use Core\Classification\Infrastructure\Http\Controller\Category\Create\CreateCategoryController;
use Core\Classification\Infrastructure\Http\Controller\Category\List\ListCategoryController;
use Core\Classification\Infrastructure\Http\Controller\Tag\Create\CreateTagController;
use Core\Classification\Infrastructure\Http\Controller\Tag\List\ListTagController;
use Illuminate\Support\Facades\Route;

Route::prefix('categories')->group(function () {
    Route::get('/', ListCategoryController::class)->name('categories.index');
    Route::post('/', CreateCategoryController::class)->name('categories.store');
});

Route::prefix('tags')->group(function () {
    Route::get('/', ListTagController::class)->name('tags.index');
    Route::post('/', CreateTagController::class)->name('tags.store');
});
