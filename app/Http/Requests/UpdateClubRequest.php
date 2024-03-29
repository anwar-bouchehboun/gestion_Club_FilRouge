<?php

namespace App\Http\Requests;

use App\Models\Club;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClubRequest extends FormRequest
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
            'club' => [
                'required',
                'string',
                Rule::unique('clubs', 'club')->ignore($this->id),
            ],
            'image' => 'required',
            'discrption' => 'required|regex:/^[a-zA-Z-\w_\s\W]+$/',
        ];
    }
}