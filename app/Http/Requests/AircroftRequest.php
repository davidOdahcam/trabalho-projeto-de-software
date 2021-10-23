<?php

namespace App\Http\Requests;

use App\Rules\AircroftUnique;
use Illuminate\Foundation\Http\FormRequest;

class AircroftRequest extends FormRequest
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
        $method = $this->method;
        $id = $this->all()['cd_arnv'];

        return [
            'cd_arnv'       => ['required','max:5', new AircroftUnique('itr_arnv', $id, $method)],
            'cd_eqpt'       => 'required|max:3',
            'cd_cmpn_aerea' => 'required|max:2'
        ];
    }


    public function messages()
    {
        return [
            'cd_arnv.max'               => 'Não ultrapasse 5 caracteres',
            'cd_arnv.unique'            => 'O código já está em uso',

            'cd_eqpt.max'               => 'Não ultrapasse 3 caracteres',
            'cd_eqpt.required'          => 'Você deve selecionar um equipamento',

            'cd_cmpn_aerea.max'         => 'Não ultrapasse 2 caracteres',
            'cd_cmpn_aerea.required'    => 'Você deve selecionar uma companhia aérea'
        ];
    }
}
