<?php

declare(strict_types=1);

namespace Core\Classification\Infrastructure\Repository\MySql;

use Core\Classification\Domain\Entity\Tag;
use Core\Classification\Domain\Repository\TagRepositoryInterface;
use Core\Classification\Infrastructure\Model\TagModel;

class TagRepository implements TagRepositoryInterface
{
    public function __construct(private TagModel $model)
    {

    }

    public function create(Tag $tag): Tag
    {
        return $this->toEntity($this->model->create(['name' => $tag->name]));
    }

    public function getAll(): array
    {
        $tags = $this->model->all();

        return array_map(fn (TagModel $category) => $this->toEntity($category), $tags->all());
    }

    private function toEntity(TagModel $model): Tag
    {
        return new Tag($model->name);
    }
}
