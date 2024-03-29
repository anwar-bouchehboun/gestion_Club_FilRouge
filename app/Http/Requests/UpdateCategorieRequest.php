<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategorieRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                Rule::unique('categories', 'name')->ignore($this->categorie->id),
            ],
            'image' => 'required',
            'club_id' => 'required|exists:clubs,id',
            'discrption' => 'required|regex:/^[a-zA-Z-\w_\s\W]+$/',

        ];
    }
}