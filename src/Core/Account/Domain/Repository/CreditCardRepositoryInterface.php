<?php

declare(strict_types=1);

namespace Core\Account\Domain\Repository;

use Core\Account\Domain\Entity\CreditCard;

interface CreditCardRepositoryInterface
{
    public function create(CreditCard $category): CreditCard;

    public function getAll(array $filters = []): array;
}
