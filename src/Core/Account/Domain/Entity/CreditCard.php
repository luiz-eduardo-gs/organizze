<?php

declare(strict_types=1);

namespace Core\Account\Domain\Entity;

use Core\Account\Domain\Enum\FinancialInstitutionLogo;

readonly class CreditCard
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
