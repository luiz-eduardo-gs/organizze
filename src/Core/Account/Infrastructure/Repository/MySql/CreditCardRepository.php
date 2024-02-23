<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Repository\MySql;

use Core\Account\Domain\Entity\CreditCard;
use Core\Account\Domain\Enum\FinancialInstitutionLogo;
use Core\Account\Domain\Repository\CreditCardRepositoryInterface;
use Core\Account\Infrastructure\Model\CreditCard as CreditCardModel;

class CreditCardRepository implements CreditCardRepositoryInterface
{
    public function __construct(private CreditCardModel $model)
    {
    }

    public function create(CreditCard $creditCard): CreditCard
    {
        return $this->toEntity(
            $this->model->create([
                'name' => $creditCard->name,
                'limit' => $creditCard->limit,
                'closing_day' => $creditCard->closingDay,
                'due_day' => $creditCard->dueDay,
                'logo' => $creditCard->logo->value,
                'default_account_id' => $creditCard->defaultAccountId,
            ])
        );
    }

    public function getAll(array $filters = []): array
    {
        $creditCards = $this->model->all();

        return array_map(fn (CreditCardModel $creditCard) => $this->toEntity($creditCard), $creditCards->all());
    }

    private function toEntity(CreditCardModel $model): CreditCard
    {
        return new CreditCard(
            id: $model->id,
            name: $model->name,
            limit: (float) $model->limit,
            closingDay: (int) $model->closing_day,
            dueDay: (int) $model->due_day,
            logo: FinancialInstitutionLogo::from($model->logo),
            defaultAccountId: (int) $model->default_account_id,
        );
    }
}
