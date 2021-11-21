<?php

namespace App\Http\Requests;

use App\Rules\BookingUnique;
use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
        $data = [
            'cd_psgr' => $this->segment(2),
            'nr_voo' => $this->segment(3),
            'dt_saida_voo' => $this->segment(4)
        ];

        $request = $this->request->all();

        return [
            'cd_psgr'       => ['required', new BookingUnique('itr_resv', $data, $request)],
            'nr_voo'        => 'required|numeric',
            'dt_saida_voo'  => 'required|date|after_or_equal:today',
            'pc_desc_pasg'  => 'between:0,100'
        ];
    }


    public function messages()
    {
        return [
            'required'                    => 'O preenchimento deste campo é obrigatório',
            'numeric'                     => 'O valor deste campo deve ser numérico',
            'cd_psgr.required'            => 'Você deve selecionar um passageiro',
            'cd_psgr.unique'              => 'O código já está em uso',
            'dt_saida_voo.after_or_equal' => 'A data de saída deve código já está em uso',
            'pc_desc_pasg.between'        => 'A porcentagem de desconto deve estar entre 0% e 100%',
        ];
    }
}
