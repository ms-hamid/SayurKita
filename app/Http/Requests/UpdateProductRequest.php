<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            //
            'product_id' => ['required', 'integer'],
            'product_name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:65535'],
            'image_path' => ['sometimes', 'image', 'mimes:jpeg,png,jpg'],
            'created_by' => ['required', 'integer'],
            'category_id' => ['required', 'integer'],
        ];
    }
}
