<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $table = 'itr_arpt';
    protected $primaryKey = 'cd_arpt';
    public $timestamps = false;

    protected $fillable = [
        'cd_arpt',
        'cd_pais',
        'sg_uf',
        'nm_cidd'
    ];

    protected $casts = [
        'cd_arpt' => 'string',
        'cd_pais' => 'string',
        'sg_uf' => 'string',
        'nm_cidd' => 'string'
    ];

    /**
     * Relationships
     */
    public function country()
    {
        return $this->hasOne(Country::class, 'cd_pais', 'cd_pais');
    }


    public function state()
    {
        return $this->hasOne(State::class, 'sg_uf', 'sg_uf');
    }
}
