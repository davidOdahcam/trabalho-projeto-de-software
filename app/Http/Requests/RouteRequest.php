<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RouteRequest extends FormRequest
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
            'cd_arpt_orig'  => 'required|max:3',
            'cd_arpt_dest'  => 'required|max:3',
            'vr_pasg'       => 'numeric'
        ];
    }


    public function messages()
    {
        return [
            'required'              => 'O preenchimento deste campo é obrigatório',
            'numeric'               => 'O valor deste campo deve ser numérico',
            'cd_arpt_orig.required' => 'Selecione um aeroporto válido',
            'cd_arpt_dest.required'          => 'Selecione um aeroporto válido',
        ];
    }
}
