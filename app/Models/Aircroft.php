<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircroft extends Model
{
    use HasFactory;

    protected $table = 'itr_arnv';
    protected $primaryKey = 'cd_arnv';

    protected $fillable = [
        'cd_eqpt',
        'cd_cmpn_aerea'
    ];
}
