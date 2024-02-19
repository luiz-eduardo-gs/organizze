<?php

declare(strict_types=1);

namespace Core\Classification\Domain\Repository;

use Core\Classification\Domain\Entity\Tag;

interface TagRepositoryInterface
{
    public function create(Tag $tag): Tag;

    public function getAll(): array;
}
