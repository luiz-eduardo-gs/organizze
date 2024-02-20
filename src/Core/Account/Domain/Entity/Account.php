<?php

declare(strict_types=1);

namespace Core\Account\Domain\Entity;

readonly class Account
{
    public function __construct(public string $name, public bool $visible = true)
    {

    }
}
