e<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SupplierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $supplierId = $this->route('id');

        return [
            'name' => 'required|string|max:100',
            'cnpj' => [
                'required',
                'string',
                'max:18',
                Rule::unique('suppliers', 'cnpj')->ignore($supplierId),
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('suppliers', 'email')->ignore($supplierId),
            ],
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'status' => 'required|in:active,inactive',
        ];
    }
}
