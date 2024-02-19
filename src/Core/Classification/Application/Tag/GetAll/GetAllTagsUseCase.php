<?php

declare(strict_types=1);

namespace Core\Classification\Application\Tag\GetAll;

use Core\Classification\Domain\Repository\TagRepositoryInterface;

class GetAllTagsUseCase
{
    public function __construct(private TagRepositoryInterface $repository)
    {

    }

    public function execute(): array
    {
        return $this->repository->getAll();
    }
}
