<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $table = 'itr_psgr';
    protected $primaryKey = 'cd_psgr';
    public $timestamps = false;

    protected $fillable = [
        'cd_psgr',
        'nm_psgr',
        'ic_sexo_psgr',
        'dt_nasc_psgr',
        'cd_pais',
        'ic_estd_civil',
        'cd_psgr_resp'
    ];

    protected $casts = [
        'cd_psgr' => 'int',
        'nm_psgr' => 'string',
        'ic_sexo_psgr' => 'string',
        'dt_nasc_psgr' => 'date',
        'cd_pais' => 'string',
        'ic_estd_civil' => 'string',
        'cd_psgr_resp' => 'int'
    ];

    /**
     * Relationships
     */

    // Auto-Relationship
    public function responsible()
    {
        return $this->hasOne(Passenger::class, 'cd_psgr', 'cd_psgr_resp');
    }

    // Country
    public function country()
    {
        return $this->hasOne(Country::class, 'cd_pais', 'cd_pais');
    }

    // Country
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'cd_psgr', 'cd_psgr');
    }
}
