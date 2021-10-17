<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'itr_resv';
    protected $primaryKey = 'dt_saida_voo';
    public $timestamps = false;

    protected $fillable = [
        'cd_psgr',
        'nr_voo',
        'dt_saida_voo',
        'pc_desc_pasg'
    ];

    protected $casts = [
        'cd_psgr' => 'int',
        'nr_voo' => 'int',
        'dt_saida_voo' => 'date',
        'pc_desc_pasg' => 'double'
    ];

    /**
     * Relationships
     */
    public function passenger()
    {
        return $this->hasOne(Passenger::class, 'cd_psgr', 'cd_psgr');
    }
}
