<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormFicheDemande extends FormRequest
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
            'nombre_echantillon' => 'numeric','gt:0',
            'client_id' => 'required',
            'longitude' => 'nullable|regex:/^\d*(\.\d{2})?$/',
            'latitude' => 'nullable|regex:/^\d*(\.\d{2})?$/',
            'culture' => 'string',
            'AntecedentsCulturaux' => 'string',
            'DateReception' => 'required|date',
            'livrerPar' => 'required|string',
            'receptionerPar' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'nombre_echantillon.numeric' => 'Le nombre doit être superieur à 0',
            'client_id.required' => 'Veuillez sélectionner un client',
            'DateReception.required' => 'Veuillez mettre la date de reception',
            'livrerPar.required' => 'Veuillez indiquer le livreur',
            'receptionerPar.required' => 'Veuillez indiquer le recepteur',

        ];
    }
}
