<?php

declare(strict_types=1);

namespace Core\Account\Domain\Enum;

enum AccountLogo: string
{
    case Itau = 'https://assets.organizze.com.br/institutions/logos/itau.png';
    case Nubank = 'https://assets.organizze.com.br/institutions/logos/nubank.png';
    case WillBank = 'https://assets.organizze.com.br/institutions/logos/will-bank.png';
    case Caju = 'https://assets.organizze.com.br/institutions/logos/caju.png';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
