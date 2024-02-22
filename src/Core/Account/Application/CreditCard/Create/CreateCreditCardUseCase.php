<?php

declare(strict_types=1);

namespace Core\Account\Application\CreditCard\Create;

use Core\Account\Domain\Entity\CreditCard;
use Core\Account\Domain\Repository\CreditCardRepositoryInterface;

class CreateCreditCardUseCase
{
    public function __construct(private CreditCardRepositoryInterface $repository)
    {
    }

    public function execute(Input $input): void
    {
        $this->repository->create(
            new CreditCard(
                name: $input->name,
                limit: $input->limit,
                closingDay: $input->closingDay,
                dueDay: $input->dueDay,
                logo: $input->logo,
                defaultAccountId: $input->defaultAccountId,
            )
        );
    }
}
