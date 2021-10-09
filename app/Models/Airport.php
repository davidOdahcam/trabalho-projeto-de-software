<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $table = 'itr_arpt';
    protected $primaryKey = 'cd_arpt';
    protected $timestamps = false;

    protected $fillable = [
        'nm_pais',
        'qt_pplc_pais'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'nm_pais', 'id')
    }
}
