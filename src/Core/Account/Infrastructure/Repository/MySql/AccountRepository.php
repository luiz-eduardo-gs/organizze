<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Repository\MySql;

use Core\Account\Domain\Entity\Account;
use Core\Account\Domain\Repository\AccountRepositoryInterface;
use Core\Account\Infrastructure\Model\Account as AccountModel;
use Core\Account\Infrastructure\Model\AccountLogo;

class AccountRepository implements AccountRepositoryInterface
{
    public function __construct(private AccountModel $model, private AccountLogo $accountLogoModel)
    {
    }

    public function create(Account $account): Account
    {
        return $this->toEntity(
            $this->model->create([
                'name' => $account->name,
                'logo' => $account->logo,
                'visible' => $account->visible,
            ])
        );
    }

    public function getAll(array $filters = []): array
    {
        $accounts = $this->model->all();

        return array_map(fn (AccountModel $account) => $this->toEntity($account), $accounts->all());
    }

    public function getLogos(): array
    {
        return $this->accountLogoModel->all(['logo'])->toArray();
    }

    private function toEntity(AccountModel $model): Account
    {
        return new Account(
            name: $model->name,
            logo: $model->logo,
            visible: (bool) $model->visible,
        );
    }
}
