<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'nullable|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sizes' => 'nullable|array',
            'sizes.*' => 'nullable|string',
            'label' => 'nullable|string',
            'status' => 'nullable|in:active,inactive',
            'genders' => 'nullable|array',
            'genders.*' => 'nullable|string',
            'colors' => 'nullable|array',
            'colors.*' => 'nullable|string',
        ];
    }
}
