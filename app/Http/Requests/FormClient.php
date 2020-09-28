<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormClient extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|unique:clients',
            'telephone' => 'required|integer|unique:clients',
            'email' => 'required|email|unique:clients',
            'adresse' => 'required',
            'type_id' => 'required',
            'detail_client_id' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'nom.required' => 'Veuillez renseigner le champ nom',
            'nom.unique' => 'Ce nom existe déja',

            'telephone.required' => 'Veuillez renseigner le champ telephone',
            'telephone.unique' => 'Ce numero existe déja',

            'email.required' => 'Veuillez renseigner le champ email',
            'email.email' => 'email invalide',
            'email.unique' => 'email  déja existé',

            'adresse.required' => 'Veuillez renseigner le champ adresse',

            'type_id.required' => 'Veuillez indiquer le type du client',

            'detail_client_id.required' => 'Veuillez renseigner le champ details',

            
        ];
    }
}
