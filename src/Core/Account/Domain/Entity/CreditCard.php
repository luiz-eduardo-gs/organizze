<?php

declare(strict_types=1);

namespace Core\Account\Domain\Entity;

readonly class CreditCard
{
    public function __construct(
        public string $name,
        public float $limit,
        public int $closingDate,
        public int $dueDate,
        public Account $defaultAccount,
    ) {

    }
}
