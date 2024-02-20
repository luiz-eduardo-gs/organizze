<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Http\Controller\Category\Create;

use App\Http\Controllers\Controller;
use Core\Account\Application\Account\Create\CreateAccountUseCase;
use Illuminate\Http\RedirectResponse;

class CreateAccountController extends Controller
{
    public function __construct(private CreateAccountUseCase $service)
    {
    }

    public function __invoke(FormRequest $request): RedirectResponse
    {
        $this->service->execute($request->validated('name'), $request->has('visible'));

        return redirect()->back();
    }
}
