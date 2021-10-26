<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class AircraftUnique implements Rule
{

    private $table, $column, $columnValue, $method;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($table, $columnValue = null, $method = 'POST', $column = 'cd_arnv')
    {
        $this->table = $table;
        $this->columnValue = $columnValue;
        $this->method = $method;
        $this->column = $column;
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
        $query = DB::table($this->table)->where($attribute, $value)->first();

        if ($this->method == 'PUT') {
            if (is_null($query)) {
                return true;
            } else {
                if($query->{$this->column} == $this->columnValue) {
                    return true;
                }
            }
        } else {
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Este código já está em uso.';
    }
}
