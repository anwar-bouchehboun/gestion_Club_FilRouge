<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
                Rule::unique('events', 'name')->ignore($this->event->id),
            ],
            'prix' => 'integer|required',
           'date'=> 'required|date|after:today',
            'local' => 'required|string',
            'club_id' => 'required|exists:clubs,id',
            'discrption' => 'required|regex:/^[a-zA-Z-\w_\s\W]+$/',
        ];
    }
}
