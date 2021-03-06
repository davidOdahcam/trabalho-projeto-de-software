<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AircraftRequest extends FormRequest
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
        $cd_arnv = $this->segment(2);

        return [
            'cd_arnv'       => "required|max:5|unique:itr_arnv,cd_arnv,{$cd_arnv},cd_arnv",
            'cd_eqpt'       => 'required|max:3',
            'cd_cmpn_aerea' => 'required|max:2'
        ];
    }


    public function messages()
    {
        return [
            'required'               => 'O preenchimento deste campo é obrigatório',
            'cd_arnv.unique'         => 'O código já está em uso',
            'cd_arnv.max'            => 'Não ultrapasse 5 caracteres',
            'cd_eqpt.required'       => 'Você deve selecionar um equipamento',
            'cd_eqpt.max'            => 'Não ultrapasse 3 caracteres',
            'cd_cmpn_aerea.required' => 'Você deve selecionar uma companhia aérea',
            'cd_cmpn_aerea.max'      => 'Não ultrapasse 2 caracteres'
        ];
    }
}
