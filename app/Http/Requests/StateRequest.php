<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StateRequest extends FormRequest
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
            'sg_uf' => 'required|max:2',
            'nm_uf' => 'required|max:25',
        ];
    }


    public function messages()
    {
        return [
            'required'  => 'O preenchimento deste campo é obrigatório',
            'sg_uf.max' => 'Não ultrapasse 2 caracteres',
            'nm_uf.max' => 'Não ultrapasse 25 caracteres'
        ];
    }
}
