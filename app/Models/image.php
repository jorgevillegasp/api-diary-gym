<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * Esta propiedad protege los atributos del modelo
     * de ser asignados masivamente
     */
    protected $guarded = [];
    /**
     * Esta función devuelve una instancia de MorphTo.
     *
     * Relacion uno a uno polimorfica
     */
    public function imageable(){
        return $this->morphTo();
    }
}
