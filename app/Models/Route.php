<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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


    public function total_bookings()
    {
        $query = DB::selectOne("SELECT COUNT(*) AS `total` FROM `itr_resv`
                                INNER JOIN `itr_voo` ON `itr_resv`.`nr_voo` = `itr_voo`.`nr_voo` AND `itr_resv`.`dt_saida_voo` = `itr_voo`.`dt_saida_voo`
                                WHERE `itr_voo`.`nr_rota_voo` = {$this->nr_rota_voo}");

        return $query->total;
    }
}
