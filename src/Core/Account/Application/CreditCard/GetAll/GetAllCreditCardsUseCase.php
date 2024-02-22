<?php

declare(strict_types=1);

namespace Core\Account\Application\CreditCard\GetAll;

use Core\Account\Domain\Repository\CreditCardRepositoryInterface;

class GetAllCreditCardsUseCase
{
    public function __construct(private CreditCardRepositoryInterface $repository)
    {
    }

    public function execute(array $filters = []): array
    {
        return $this->repository->getAll($filters);
    }
}
