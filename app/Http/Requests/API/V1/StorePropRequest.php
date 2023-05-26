<?php

namespace App\Http\Requests\API\V1;

use Illuminate\Foundation\Http\FormRequest;

class StorePropRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'shop_id' => 'integer|exists:shops,id',
            'name' => 'string|max:255',
            'description' => 'string',
            'price' => 'numeric',
            'image' => 'image',
            'quantity' => 'integer',
            'labels' => 'array',
            'labels.*' => 'string|max:85',
        ];
    }
}
