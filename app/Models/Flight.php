<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $table = 'itr_voo';
    protected $primaryKey = ['nr_voo', 'dt_saida_voo'];

    protected $fillable = [
        'nr_rota_voo',
        'cd_arnv'
    ];
}
