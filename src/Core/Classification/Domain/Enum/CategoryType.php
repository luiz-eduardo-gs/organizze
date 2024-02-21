<?php

declare(strict_types=1);

namespace Core\Classification\Domain\Enum;

enum CategoryType: string
{
    case Expense = 'expense';
    case Income = 'income';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
