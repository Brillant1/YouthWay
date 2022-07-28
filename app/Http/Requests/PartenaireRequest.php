<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartenaireRequest extends FormRequest
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
            'email' => 'required',
            'nom' => 'required|string',
            'lien' => 'required|string',
            'contact' =>'numeric',
            'photo' => 'required|string|size:max:2000 ',
            'description' => 'required|string'
        ];
    }

    public function messages() {
        return [
            'email.required' => 'l\'email est obligatoire',
            'email.email' => 'Entrez un email valide',
            'nom.required' => 'Ce champs est requis',
            'photo.required' => 'La photo est obligatoire',
            'description.required' => 'la description est obligatoire',
            'photo.size' => 'Taille de fichier trop grande'
        ];
    }
}
