<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Http\Controller\CreditCard\List;

use App\Http\Controllers\Controller;
use Core\Account\Application\Account\GetAll\GetAllAccountsUseCase;
use Core\Account\Application\CreditCard\GetAll\GetAllCreditCardsUseCase;
use Core\Account\Domain\Enum\FinancialInstitutionLogo;
use Illuminate\View\View;

class ListCreditCardController extends Controller
{
    public function __construct(
        private GetAllCreditCardsUseCase $service,
        private GetAllAccountsUseCase $accountsService,
    ) {

    }

    public function __invoke(): View
    {
        $creditCards = $this->service->execute();
        $accounts = $this->accountsService->execute();
        $logos = FinancialInstitutionLogo::values();

        return view('credit-cards.index', compact('creditCards', 'accounts', 'logos'));
    }
}
