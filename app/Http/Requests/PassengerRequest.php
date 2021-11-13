<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassengerRequest extends FormRequest
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
            'nm_psgr'       => 'required|max:30',
            'ic_sexo_psgr'  => 'max:1',
            'dt_nasc_psgr'  => 'date',
            'cd_pais'       => 'max:2',
            'ic_estd_civil' => 'required|max:1',
            'cd_psgr_resp'  => ''
        ];
    }


    public function messages()
    {
        return [
            'required'             => 'O preenchimento deste campo é obrigatório',
            'numeric'              => 'O valor deste campo deve ser numérico',
            'nm_psgr.max'          => 'Não ultrapasse 30 caracteres',
            'ic_sexo_psgr.max'     => 'Não ultrapasse 1 caracter',
            'dt_nasc_psgr'         => 'Digite uma data válida',
            'cd_pais.required'     => 'Selecione um estado civil',
            'cd_pais.max'          => 'Selecione um estado civil válido',
        ];
    }
}
