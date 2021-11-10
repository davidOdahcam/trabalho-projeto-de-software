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
            'dt_saida_voo'  => 'required',
            'pc_desc_pasg'  => ''
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
