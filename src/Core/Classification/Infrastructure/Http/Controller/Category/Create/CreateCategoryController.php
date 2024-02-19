<?php

declare(strict_types=1);

namespace Core\Classification\Infrastructure\Http\Controller\Category\Create;

use App\Http\Controllers\Controller;
use Core\Classification\Application\Category\Create\CreateCategoryUseCase;
use Core\Classification\Domain\Enum\CategoryType;
use Illuminate\Http\RedirectResponse;

class CreateCategoryController extends Controller
{
    public function __construct(private CreateCategoryUseCase $service)
    {

    }

    public function __invoke(FormRequest $request): RedirectResponse
    {
        $this->service->execute($request->validated('name'), CategoryType::from($request->validated('type')));

        return redirect()->back();
    }
}
