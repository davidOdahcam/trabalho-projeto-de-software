<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $table = 'itr_rota_voo';
    protected $primaryKey = 'nr_rota_voo';
    protected $timestamps = false;

    protected $fillable = [
        'cd_aprt_orig',
        'cd_aprt_dest',
        'vr_pasg'
    ];
}
