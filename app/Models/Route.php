<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $table = 'itr_rota_voo';
    protected $primaryKey = 'nr_rota_voo';
    public $timestamps = false;

    protected $fillable = [
        'nr_rota_voo',
        'cd_arpt_orig',
        'cd_arpt_dest',
        'vr_pasg'
    ];

    protected $casts = [
        'nr_rota_voo' => 'float',
        'cd_arpt_orig' => 'string',
        'cd_arpt_dest' => 'string',
        'vr_pasg' => 'float'
    ];

    /**
     * Relationships
     */
    public function origin()
    {
        return $this->hasOne(Airport::class, 'cd_arpt', 'cd_arpt_orig');
    }


    public function destiny()
    {
        return $this->hasOne(Airport::class, 'cd_arpt', 'cd_arpt_dest');
    }
}
