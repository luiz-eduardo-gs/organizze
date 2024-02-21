<?php

declare(strict_types=1);

namespace Core\Classification\Infrastructure\Repository\MySql;

use Core\Classification\Domain\Entity\Category;
use Core\Classification\Domain\Enum\CategoryColor;
use Core\Classification\Domain\Enum\CategoryType;
use Core\Classification\Domain\Repository\CategoryRepositoryInterface;
use Core\Classification\Infrastructure\Model\CategoryModel;
use Illuminate\Database\Eloquent\Builder;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function __construct(
        private CategoryModel $model
    ) {
    }

    public function create(Category $category): Category
    {
        return $this->toEntity(
            $this->model->create([
                'name' => $category->name,
                'color' => $category->color->value,
                'type' => $category->type->value,
            ])
        );
    }

    public function getAll(array $filters = []): array
    {
        $query = $this->model->query();

        $query->when($filters['type'] ?? null, fn (Builder $builder) => $builder->where('type', $filters['type']));

        $categories = $query->get();

        return array_map(fn (CategoryModel $category) => $this->toEntity($category), $categories->all());
    }

    private function toEntity(CategoryModel $model): Category
    {
        return new Category(
            name: $model->name,
            color: CategoryColor::from($model->color),
            type: CategoryType::from($model->type),
        );
    }
}
