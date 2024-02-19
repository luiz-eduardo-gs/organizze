<?php

declare(strict_types=1);

namespace Core\Classification\Domain\Entity;

use Core\Classification\Domain\Enum\CategoryType;

readonly class Category
{
    public function __construct(public string $name, public CategoryType $type)
    {

    }
}
