<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;


    /**
     * Esta función relaciona un objeto Country con muchos objetos Province
     *
     * Relacion de uno a mucho
     */
    public function province(){
        // Esta línea establece la relación entre Country y Province
        return $this->belongsTo(Province::class);
    }

    /**
     * Esta función devuelve una relación
     * hasMany entre la clase actual y la clase Address
     *
     * Relacion de uno a mucho (inversa)
     */
    public function addresses(){
        return $this->hasMany(Address::class);
    }
}
