<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;

    /**
     * Esta función establece la relación entre un usuario y las series que ha creado
     *
     * Relacion de uno a muchos
     */
    public function series(){
        return $this->hasMany(Serie::class);
    }

    //? Relaciones de muchos a muchos
    //Para mas informacion visita la documentacion
    //https://laravel.com/docs/9.x/eloquent-relationships#many-to-many

    /**
     * Esta función establece una relación de muchos
     * a muchos entre la clase actual (Routine) y la clase User
     */
    public function users(){
        return $this->belongsToMany(User::class);
    }

}
