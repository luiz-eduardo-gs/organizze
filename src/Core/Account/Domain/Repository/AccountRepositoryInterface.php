<?php

declare(strict_types=1);

namespace Core\Account\Domain\Repository;

use Core\Account\Domain\Entity\Account;

interface AccountRepositoryInterface
{
    public function create(Account $category): Account;

    public function getAll(array $filters = []): array;

    public function getLogos(): array;
}
