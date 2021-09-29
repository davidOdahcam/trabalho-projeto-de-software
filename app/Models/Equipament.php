<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'itr_eqpt';
    protected $primaryKey = 'cd_eqpt';

    protected $fillable = [
        'nm_eqpt',
        'dc_tipo_eqpt',
        'qt_eqpt',
        'ic_tipo_prps',
        'qt_psgr'
    ];
}
