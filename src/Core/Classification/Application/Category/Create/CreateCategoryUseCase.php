<?php

declare(strict_types=1);

namespace Core\Classification\Application\Category\Create;

use Core\Classification\Domain\Entity\Category;
use Core\Classification\Domain\Enum\CategoryColor;
use Core\Classification\Domain\Enum\CategoryType;
use Core\Classification\Domain\Repository\CategoryRepositoryInterface;

class CreateCategoryUseCase
{
    public function __construct(private CategoryRepositoryInterface $repository)
    {

    }

    public function execute(string $name, CategoryColor $color, CategoryType $type): void
    {
        $this->repository->create(new Category(name: $name, type: $type, color: $color));
    }
}
