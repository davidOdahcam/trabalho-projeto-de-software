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
        'nm_pais',
        'qt_pplc_pais'
    ];

    protected $casts = [
        'cd_arpt' => 'string',
        'nm_pais' => 'string',
        'qt_pplc_pais' => 'int'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'nm_pais', 'id');
    }
}
