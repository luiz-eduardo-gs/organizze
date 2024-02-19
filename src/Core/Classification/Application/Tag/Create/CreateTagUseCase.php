<?php

declare(strict_types=1);

namespace Core\Classification\Application\Tag\Create;

use Core\Classification\Domain\Entity\Tag;
use Core\Classification\Domain\Repository\TagRepositoryInterface;

class CreateTagUseCase
{
    public function __construct(private TagRepositoryInterface $repository)
    {

    }

    public function execute(string $name): void
    {
        $this->repository->create(new Tag($name));
    }
}
