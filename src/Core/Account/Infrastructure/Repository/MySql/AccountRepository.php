<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Repository\MySql;

use Core\Account\Domain\Entity\Account;
use Core\Account\Domain\Repository\AccountRepositoryInterface;
use Core\Account\Infrastructure\Model\Account as AccountModel;

class AccountRepository implements AccountRepositoryInterface
{
    public function __construct(private AccountModel $model)
    {
    }

    public function create(Account $account): Account
    {
        return $this->toEntity(
            $this->model->create([
                'name' => $account->name,
                'visible' => $account->visible,
            ])
        );
    }

    public function getAll(array $filters = []): array
    {
        $accounts = $this->model->all();

        return array_map(fn (AccountModel $account) => $this->toEntity($account), $accounts->all());
    }

    private function toEntity(AccountModel $model): Account
    {
        return new Account(
            name: $model->name,
            visible: (bool) $model->visible,
        );
    }
}
