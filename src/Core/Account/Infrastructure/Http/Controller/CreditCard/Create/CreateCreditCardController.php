<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Http\Controller\CreditCard\Create;

use App\Http\Controllers\Controller;
use Core\Account\Application\CreditCard\Create\CreateCreditCardUseCase;
use Core\Account\Application\CreditCard\Create\Input;
use Core\Account\Domain\Enum\FinancialInstitutionLogo;
use Illuminate\Http\RedirectResponse;

class CreateCreditCardController extends Controller
{
    public function __construct(private CreateCreditCardUseCase $service)
    {
    }

    public function __invoke(FormRequest $request): RedirectResponse
    {
        $this->service->execute(
            new Input(
                name: $request->validated('name'),
                limit: $request->float('limit'),
                closingDay: $request->integer('closing-day'),
                dueDay: $request->integer('due-day'),
                logo: FinancialInstitutionLogo::from($request->validated('logo')),
                defaultAccountId: $request->integer('default-account')
            )
        );

        return redirect()->back();
    }
}
