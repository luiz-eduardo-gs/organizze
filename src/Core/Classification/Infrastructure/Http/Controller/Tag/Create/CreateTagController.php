<?php

declare(strict_types=1);

namespace Core\Classification\Infrastructure\Http\Controller\Tag\Create;

use App\Http\Controllers\Controller;
use Core\Classification\Application\Tag\Create\CreateTagUseCase;
use Illuminate\Http\RedirectResponse;

class CreateTagController extends Controller
{
    public function __construct(private CreateTagUseCase $service)
    {

    }

    public function __invoke(FormRequest $request): RedirectResponse
    {
        $this->service->execute($request->validated('name'));

        return redirect()->back();
    }
}
