<?php

declare(strict_types=1);

namespace Core\Classification\Infrastructure\Http\Controller\Category\List;

use App\Http\Controllers\Controller;
use Core\Classification\Application\Category\GetAll\GetAllCategoriesUseCase;
use Illuminate\View\View;

class ListCategoryController extends Controller
{
    public function __construct(private GetAllCategoriesUseCase $service)
    {

    }

    public function __invoke(): View
    {
        $categories = $this->service->execute();

        return view('categories.index', compact('categories'));
    }
}
