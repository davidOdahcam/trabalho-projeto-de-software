<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
        $cd_pais = $this->segment(2);

        return [
            'cd_pais'      => "required|max:2|unique:itr_pais,cd_pais,{$cd_pais},cd_pais",
            'nm_pais'      => 'required|max:25',
            'qt_pplc_pais' => 'numeric'
        ];
    }


    public function messages()
    {
        return [
            'required'    => 'O preenchimento deste campo é obrigatório',
            'numeric'     => 'O valor deste campo deve ser numérico',
            'cd_pais.max' => 'Não ultrapasse 2 caracteres',
            'nm_pais.max' => 'Não ultrapasse 25 caracteres',
        ];
    }
}
