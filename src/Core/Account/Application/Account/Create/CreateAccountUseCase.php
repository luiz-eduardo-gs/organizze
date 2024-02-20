<?php

declare(strict_types=1);

namespace Core\Account\Application\Account\Create;

use Core\Account\Domain\Entity\Account;
use Core\Account\Domain\Repository\AccountRepositoryInterface;

class CreateAccountUseCase
{
    public function __construct(private AccountRepositoryInterface $repository)
    {
    }

    public function execute(string $name, bool $visible = true): void
    {
        $this->repository->create(new Account(name: $name, visible: $visible));
    }
}
