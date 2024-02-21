<?php

declare(strict_types=1);

namespace Core\Account\Application\Account\GetAll;

use Core\Account\Domain\Repository\AccountRepositoryInterface;

class GetAllAccountsUseCase
{
    public function __construct(private AccountRepositoryInterface $repository)
    {
    }

    public function execute(array $filters = []): array
    {
        return [
            'accounts' => $this->repository->getAll($filters),
            'logos' => $this->repository->getLogos(),
        ];
    }
}
