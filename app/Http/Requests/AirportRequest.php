<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirportRequest extends FormRequest
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
        $cd_arpt = $this->segment(2);

        return [
            'cd_arpt' => "required|max:3|unique:itr_arpt,cd_arpt,{$cd_arpt},cd_arpt",
            'cd_pais' => 'required|max:2',
            'sg_uf'   => 'max:2',
            'nm_cidd' => 'required|max:30'
        ];
    }


    public function messages()
    {
        return [
            'required'                  => 'O preenchimento deste campo é obrigatório',

            'cd_arpt.max'               => 'Não ultrapasse 3 caracteres',
            'cd_arpt.unique'            => 'O código já está em uso',

            'sg_uf.max'                 => 'Não ultrapasse 2 caracteres',

            'nm_cidd.max'               => 'Não ultrapasse 30 caracteres'
        ];
    }
}
