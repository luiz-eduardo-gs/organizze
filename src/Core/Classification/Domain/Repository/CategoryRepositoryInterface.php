<?php

declare(strict_types=1);

namespace Core\Classification\Domain\Repository;

use Core\Classification\Domain\Entity\Category;

interface CategoryRepositoryInterface
{
    public function create(Category $category): Category;

    public function getAll(array $filters = []): array;
}
