<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class ProductRequest extends FormRequest
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
        return [
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'sku'         => 'required|string|unique:products,sku',
            'price'       => 'required|numeric|min:0',
            'old_price'   => 'nullable|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'status'      => 'required|in:active,inactive',
            'material'    => 'nullable|string',
            'images'   => 'nullable|array|max:3',
            'images.max' => 'Você pode enviar no máximo 3 imagens.',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    #[Override]
    public function messages(): array
    {
        return [
            'name.required'        => 'O nome do produto é obrigatório.',
            'name.max'             => 'O nome não pode exceder 255 caracteres.',
            'sku.required'         => 'O SKU é obrigatório.',
            'sku.unique'           => 'Este SKU já está em uso.',
            'price.required'       => 'O preço é obrigatório.',
            'price.numeric'        => 'O preço deve ser um número.',
            'price.min'            => 'O preço deve ser pelo menos 0.',
            'stock.required'       => 'O estoque é obrigatório.',
            'stock.integer'        => 'O estoque deve ser um número inteiro.',
            'stock.min'            => 'O estoque deve ser pelo menos 0.',
            'category_id.required' => 'Selecione uma categoria.',
            'category_id.exists'   => 'Categoria inválida.',
            'supplier_id.exists'   => 'Fornecedor inválido.',
            'status.required'      => 'O status é obrigatório.',
            'status.in'            => 'Status inválido.',
            'images.required'      => 'Selecione ao menos uma imagem.',
            'images.*.image'       => 'O arquivo deve ser uma imagem.',
            'images.*.mimes'       => 'Apenas JPG e PNG são permitidos.',
            'images.*.max'         => 'Cada imagem deve ter no máximo 2MB.',
        ];
    }
}
