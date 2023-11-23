<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muscle extends Model
{
    use HasFactory;

    /**
     * Esta función establece la relación entre el modelo actual
     * Muscle y el modelo Exercise.
     *
     * Relacion de muchos a muchos
     */
    public function exercise(){
        return $this->belongsToMany(Exercise::class);
    }

    /**
     * Relacion una a uno polimorfica
     *
     * Esta función publica una imagen y devuelve una relación
     * de uno a uno entre la imagen y el modelo actual utilizando
     * el método morphOne. El primer argumento es el nombre
     * del modelo de imagen (en este caso, "image") y el segundo
     * argumento es una cadena que especifica el tipo de relación ("imageable").
     *
     * @return
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
