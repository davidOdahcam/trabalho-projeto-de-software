<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'itr_resv';
    protected $primaryKey = false;
    protected $timestamps = false;

    protected $fillable = [
        'cd_psgr',
        'nr_voo',
        'dt_saida_voo',
        'pc_desc_pasg'
    ];
}
