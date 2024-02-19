<?php

declare(strict_types=1);

namespace Core\Classification\Domain\Enum;

enum CategoryType: string
{
    case Expense = 'expense';
    case Income = 'income';
}
