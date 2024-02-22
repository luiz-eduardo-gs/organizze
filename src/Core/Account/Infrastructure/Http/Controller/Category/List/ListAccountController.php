<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Http\Controller\Category\List;

use App\Http\Controllers\Controller;
use Core\Account\Application\Account\GetAll\GetAllAccountsUseCase;
use Core\Account\Domain\Enum\FinancialInstitutionLogo;
use Illuminate\View\View;

class ListAccountController extends Controller
{
    public function __construct(private GetAllAccountsUseCase $service)
    {

    }

    public function __invoke(): View
    {
        $accounts = $this->service->execute();
        $logos = FinancialInstitutionLogo::values();

        return view('accounts.index', compact('accounts', 'logos'));
    }
}
