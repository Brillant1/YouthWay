<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTemoignageRequest extends FormRequest
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
            'photo'=>'required|max:5000',
            'message'=>'required|string',
            'email' => 'required|email',
            'nom' => 'required|string',
            'prenom' => 'required|string'
        ];
    }
}
