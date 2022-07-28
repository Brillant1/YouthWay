<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomaineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nom' => 'string|required',
            'description' => 'string|required'
        ];
    }
    public function messages()
    {
        return [
            'nom.required' => 'le nom est obligatoire',
            'description.required' => 'la description est obligatoire'
        ];
    }
}
