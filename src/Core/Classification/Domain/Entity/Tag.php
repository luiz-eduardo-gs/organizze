<?php

declare(strict_types=1);

namespace Core\Classification\Domain\Entity;

readonly class Tag
{
    public function __construct(public string $name, public ?int $id = null)
    {

    }
}
