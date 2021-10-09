<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $table = 'itr_psgr';
    protected $primaryKey = 'cd_psgr';
    protected $timestamps = false;

    protected $fillable = [
        'nm_psgr',
        'ic_sexo_psgr',
        'dt_nasc_psgr',
        'cd_pais',
        'ic_estd_civil',
        'cd_psgr_resp'
    ];
}
