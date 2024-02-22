<?php

declare(strict_types=1);

namespace Core\Account\Application\CreditCard\Create;

use Core\Account\Domain\Enum\FinancialInstitutionLogo;

readonly class Input
{
    public function __construct(
        public string $name,
        public float $limit,
        public int $closingDay,
        public int $dueDay,
        public FinancialInstitutionLogo $logo,
        public int $defaultAccountId,
    ) {

    }
}
