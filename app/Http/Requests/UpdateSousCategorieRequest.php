<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSousCategorieRequest extends FormRequest
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
                Rule::unique('souscategories', 'name')->ignore($this->souscategorie->id),
            ],

            'image'=>'required',
            'price'=>'required|integer',
            'categorie_id'=>'required|exists:categories,id',
            'discrption'=> 'required|regex:/^[a-zA-Z-\w_\s\W]+$/',
        ];
    }
}