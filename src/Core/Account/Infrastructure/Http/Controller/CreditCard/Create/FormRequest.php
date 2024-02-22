<?php

declare(strict_types=1);

namespace Core\Account\Infrastructure\Http\Controller\CreditCard\Create;

use Core\Account\Domain\Enum\FinancialInstitutionLogo;
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
            'limit' => ['required', 'numeric'],
            'closing-day' => ['required', 'integer', 'min:1', 'max:31'],
            'due-day' => ['required', 'integer', 'min:1', 'max:31'],
            'logo' => ['required', new Enum(FinancialInstitutionLogo::class)],
            'default-account' => ['required', 'integer'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge(['limit' => preg_replace('/[^0-9\-]/', '', $this->limit)]);
    }
}
