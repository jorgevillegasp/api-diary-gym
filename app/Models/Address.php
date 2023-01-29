<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\City;

class Address extends Model
{
    use HasFactory;

    /**
     * Esta función relaciona un objeto User con muchos objetos Address
     *
     * Relacion uno a muchos.
     *
     */
    public function users(){
        //Esta línea establece una relación de muchos a uno entre el modelo actual y el modelo User
        return $this->hasMany(User::class);
    }


    /**
     * Esta función establece una relación entre la clase Address
     * y la clase City
     *
     * Relacion uno a muchos (inversa)
     *
     *  @return belongsTo
     */
    public function city(){
        // Retorna una instancia de la clase City.
        return $this->belongsTo(City::class);
    }
}


