<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $table = 'itr_psgr';
    protected $primaryKey = 'cd_psgr';
    public $timestamps = false;

    protected $fillable = [
        'nm_psgr',
        'ic_sexo_psgr',
        'dt_nasc_psgr',
        'cd_pais',
        'ic_estd_civil',
        'cd_psgr_resp'
    ];

    protected $casts = [
        'cd_psgr' => 'int',
        'nm_psgr' => 'string',
        'ic_sexo_psgr' => 'string',
        'dt_nasc_psgr' => 'date',
        'cd_pais' => 'string',
        'ic_estd_civil' => 'string',
        'cd_psgr_resp' => 'int'
    ];
}
