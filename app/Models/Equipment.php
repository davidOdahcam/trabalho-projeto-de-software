<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'itr_eqpt';
    protected $primaryKey = 'cd_eqpt';
    public $timestamps = false;

    protected $fillable = [
        'nm_eqpt',
        'dc_tipo_eqpt',
        'qt_motor',
        'ic_tipo_prps',
        'qt_psgr'
    ];
}
