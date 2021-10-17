<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'itr_pais';
    protected $primaryKey = 'cd_pais';
    public $timestamps = false;

    protected $fillable = [
        'cd_pais',
        'nm_pais',
        'qt_pplc_pais'
    ];

    protected $casts = [
        'cd_pais' => 'string',
        'nm_pais' => 'string',
        'qt_pplc_pais' => 'int',
    ];
}
