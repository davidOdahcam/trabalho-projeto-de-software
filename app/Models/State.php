<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'itr_uf';
    protected $primaryKey = 'sg_uf';
    public $timestamps = false;

    protected $fillable = [
        'nm_uf'
    ];

    protected $casts = [
        'sg_uf' => 'string',
        'nm_uf' => 'string'
    ];
}
