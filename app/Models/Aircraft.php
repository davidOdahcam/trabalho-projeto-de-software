<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    use HasFactory;

    protected $table = 'itr_arnv';
    protected $primaryKey = 'cd_arnv';
    public $timestamps = false;

    protected $fillable = [
        'cd_arnv',
        'cd_eqpt',
        'cd_cmpn_aerea'
    ];

    protected $casts = [
        'cd_arnv' => 'string',
        'cd_eqpt' => 'string',
        'cd_cmpn_aerea' => 'string'
    ];

    /**
     * Relationships
     */
    public function equipment()
    {
        return $this->hasOne(Equipment::class, 'cd_eqpt', 'cd_eqpt');
    }


    public function airline()
    {
        return $this->hasOne(Airline::class, 'cd_cmpn_aerea', 'cd_cmpn_aerea');
    }

    // airlines belongsToMany
}
