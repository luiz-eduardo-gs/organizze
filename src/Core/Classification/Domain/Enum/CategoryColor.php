<?php

declare(strict_types=1);

namespace Core\Classification\Domain\Enum;

enum CategoryColor: string
{
    case Gray500 = '#6b7280';
    case Gray700 = '#374151';
    case Yellow200 = '#fce96a';
    case Pink300 = '#f8b4d9';
    case Orange400 = '#fb923c';
    case Red500 = '#ef4444';
    case Red700 = '#b91c1c';
    case Green300 = '#86efac';
    case Green500 = '#10b981';
    case Pink700 = '#be185d';
    case Indigo800 = '#6b21a8';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
