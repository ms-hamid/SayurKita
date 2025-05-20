<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
            'comment_id' => ['required', 'integer'],
            'content' => ['required', 'string', 'max:65535'],
            'created_at' => ['required', 'date'],
            'target_type' => ['required', 'string', 'in:blog,product'],
            'target_id' => ['required', 'integer'],
            'user_id' => ['required', 'integer'],
            'parent_id' => ['nullable', 'integer'],
        ];
    }
}
