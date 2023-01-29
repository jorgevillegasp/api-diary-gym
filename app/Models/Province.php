<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    /**
     * Esta función establece una relación
     * entre el modelo Province y la clase Country
     *
     * Relacion de uno a mucho (invertido)
     */
    public function country(){
        return $this->belongsTo(Country::class);
    }

    /**
     * Esta función establece una relación de
     * muchos a uno entre la clase Country y la clase City.
     *
     * Relacion de uno a mucho
     */
    public function cities(){
        // Retorna una instancia de la relación entre Country y City
        return $this->hasMany(City::class);
    }
}

