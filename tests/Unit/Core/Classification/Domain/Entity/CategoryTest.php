<?php

declare(strict_types=1);

namespace Tests\Unit\Core\Classification\Domain\Entity;

use Core\Classification\Domain\Entity\Category;
use Core\Classification\Domain\Enum\CategoryType;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function testGivenValidParamsShouldCreateNewExpenseCategory(): void
    {
        $expectedName = 'Academia';
        $expectedType = CategoryType::Income;

        $actualExpenseCategory = new Category(
            name: $expectedName,
            type: $expectedType
        );

        $this->assertInstanceOf(Category::class, $actualExpenseCategory);
        $this->assertEquals($expectedName, $actualExpenseCategory->name);
        $this->assertEquals($expectedType->value, $actualExpenseCategory->type->value);
    }
}
