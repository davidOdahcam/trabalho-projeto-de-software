<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $table = 'itr_voo';
    protected $primaryKey = 'nr_voo';
    public $timestamps = false;

    protected $fillable = [
        'nr_voo',
        'dt_saida_voo',
        'nr_rota_voo',
        'cd_arnv'
    ];

    protected $casts = [
        'nr_voo' => 'int',
        'dt_saida_voo' => 'date',
        'nr_rota_voo' => 'int',
        'cd_arnv' => 'string'
    ];

    /**
     * Relationships
     */
    public function aircraft()
    {
        return $this->hasOne(Aircraft::class, 'cd_arnv', 'cd_arnv');
    }


    public function route()
    {
        return $this->hasOne(Route::class, 'nr_rota_voo', 'nr_rota_voo');
    }
}
