<?php

declare(strict_types=1);

namespace Core\Account\Domain\Entity;

use Core\Account\Domain\Enum\AccountLogo;

readonly class Account
{
    public function __construct(
        public string $name,
        public AccountLogo $logo,
        public bool $visible = true
    ) {
    }
}
