<?php

declare(strict_types=1);

namespace Core\Classification\Application\Category\GetAll;

use Core\Classification\Domain\Repository\CategoryRepositoryInterface;

class GetAllCategoriesUseCase
{
    public function __construct(private CategoryRepositoryInterface $repository)
    {

    }

    public function execute(array $filters = []): array
    {
        return $this->repository->getAll($filters);
    }
}
