<?php

declare(strict_types=1);

namespace Core\Account\Domain\Entity;

use Core\Account\Domain\Enum\FinancialInstitutionLogo;

readonly class Account
{
    public function __construct(
        public string $name,
        public FinancialInstitutionLogo $logo,
        public ?int $id = null,
        public bool $visible = true
    ) {
    }
}
