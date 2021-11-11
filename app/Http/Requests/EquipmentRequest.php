<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipmentRequest extends FormRequest
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
        $cd_eqpt = $this->segment(2);

        return [
            'cd_eqpt'      => "required|max:2|unique:itr_eqpt,cd_eqpt,{$cd_eqpt},cd_eqpt",
            'nm_eqpt'      => 'required|max:38',
            'dc_tipo_eqpt' => 'required|max:13',
            'qt_motor'     => 'numeric',
            'ic_tipo_prps' => 'max:1',
            'qt_psgr'      => 'numeric'
        ];
    }


    public function messages()
    {
        return [
            'required'         => 'O preenchimento deste campo é obrigatório',
            'numeric'          => 'O valor deste campo deve ser numérico',
            'cd_eqpt.max'      => 'Não ultrapasse 2 caracteres',
            'cd_eqpt.unique'   => 'O código já está em uso',
            'nm_eqpt.max'      => 'Não ultrapasse 38 caracteres',
            'dc_tipo_eqpt.max' => 'Não ultrapasse 13 caracteres',
            'ic_tipo_prps.max' => 'Não ultrapasse 1 caractere',
        ];
    }
}
