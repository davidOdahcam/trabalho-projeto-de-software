<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class FlightUnique implements Rule
{
    private $table, $columns, $columnsValues, $request;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($table, $columnsValues = null, $request = null, $columns = ['nr_voo', 'dt_saida_voo'])
    {
        $this->table = $table;
        if (isset($columnsValues)) {
            $this->columnsValues = [
                'nr_voo' => $columnsValues['nr_voo'],
                'dt_saida_voo' => $columnsValues['dt_saida_voo']
            ];
        }

        $this->request = $request;
        $this->columns = $columns;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $where = $this->request;
        unset($where['_token']);
        unset($where['_method']);
        unset($where['nr_rota_voo']);
        unset($where['cd_arnv']);

        $result = DB::table($this->table)->where($this->columnsValues)->first();

        if ($result) {
            $nr_voo = $this->columnsValues['nr_voo'];
            $dt_saida_voo = $this->columnsValues['dt_saida_voo'];

            if (($result->nr_voo == $nr_voo) && ($result->dt_saida_voo == $dt_saida_voo)) {
                if (($where['nr_voo'] == $nr_voo) && ($where['dt_saida_voo'] == $dt_saida_voo)) {
                    return true;
                }
            }
        }

        $result_request = DB::table($this->table)->where($where)->first();

        return is_null($result_request);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Já existe um voo com o mesmo código de data de saída';
    }
}
