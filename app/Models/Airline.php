<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;

    protected $table = 'itr_cmpn_aerea';
    protected $primaryKey = 'cd_cmpn_aerea';
    public $timestamps = false;

    protected $fillable = [
        'nm_cmpn_aerea',
        'cd_pais'
    ];

    protected $casts = [
        'cd_cmpn_aerea' => 'string',
        'nm_cmpn_aerea' => 'string',
        'cd_pais' => 'string'
    ];
}
