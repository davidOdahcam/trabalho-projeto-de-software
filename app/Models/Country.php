<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'itr_pais';
    protected $primaryKey = 'cd_pais';
    protected $timestamps = false;

    protected $fillable = [
        'nm_pais',
        'qt_pplc_pais'
    ];
}
