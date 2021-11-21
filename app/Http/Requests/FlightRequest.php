<?php

namespace App\Http\Requests;

use App\Rules\FlightUnique;
use Illuminate\Foundation\Http\FormRequest;

class FlightRequest extends FormRequest
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
        $cd_voo = $this->segment(2);

        $data = [
            'nr_voo' => $this->segment(2),
            'dt_saida_voo' => $this->segment(3)
        ];

        $request = $this->request->all();

        return [
            'nr_voo'        => ['required', 'numeric', new FlightUnique('itr_voo', $data, $request)],
            'dt_saida_voo'  => 'required|date|after_or_equal:today',
            'nr_rota_voo'   => 'required|numeric',
            'cd_arnv'       => 'required|max:5'
        ];
    }


    public function messages()
    {
        return [
            'required'           => 'O preenchimento deste campo é obrigatório',
            'numeric'            => 'O valor deste campo deve ser numérico',
            'dt_saida_voo.after' => 'A data de saída não pode ser retroativa',
            'nr_voo.numeric'     => 'O número do voo deve conter apenas números',
            'cd_arnv.required'   => 'Você deve selecionar uma aeronave',
            'cd_arnv.max'        => 'Selecione uma aeronave válida'
        ];
    }
}
