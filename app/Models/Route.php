<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $table = 'itr_rota_voo';
    protected $primaryKey = 'nr_rota_voo';
    public $timestamps = false;

    protected $fillable = [
        'cd_aprt_orig',
        'cd_aprt_dest',
        'vr_pasg'
    ];

    protected $casts = [
        'nr_rota_voo' => 'float',
        'cd_aprt_orig' => 'string',
        'cd_aprt_dest' => 'string',
        'vr_pasg' => 'float'
    ];
}
