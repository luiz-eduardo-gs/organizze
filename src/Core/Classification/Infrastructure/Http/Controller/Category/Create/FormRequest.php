<?php

declare(strict_types=1);

namespace Core\Classification\Infrastructure\Http\Controller\Category\Create;

use Core\Classification\Domain\Enum\CategoryType;
use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;
use Illuminate\Validation\Rules\Enum;

class FormRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'type' => ['required', new Enum(CategoryType::class)],
        ];
    }
}
