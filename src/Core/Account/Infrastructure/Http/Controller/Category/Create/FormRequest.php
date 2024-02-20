<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Http\Controller\Category\Create;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;

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
            'visible' => ['sometimes', 'accepted'],
        ];
    }
}
