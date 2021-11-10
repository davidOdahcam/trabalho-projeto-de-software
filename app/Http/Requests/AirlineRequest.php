<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirlineRequest extends FormRequest
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
        $cd_cmpn_aerea = $this->segment(2);

        return [
            'cd_cmpn_aerea' => "required|max:2|unique:itr_cmpn_aerea,cd_cmpn_aerea,{$cd_cmpn_aerea},cd_cmpn_aerea",
            'nm_cmpn_aerea' => 'required|max:22',
            'cd_pais'       => 'max:2'
        ];
    }


    public function messages()
    {
        return [
            'required'               => 'O preenchimento deste campo é obrigatório',

            'cd_cmpn_aerea.max'      => 'Não ultrapasse 2 caracteres',
            'cd_cmpn_aerea.unique'   => 'O código já está em uso',

            'nm_cmpn_aerea.max'      => 'Não ultrapasse 22 caracteres',
            'nm_cmpn_aerea.required' => 'Você deve digitar um nome',

            'cd_pais.max'            => 'Não ultrapasse 2 caracteres'
        ];
    }
}
