<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * Esta función devuelve una relación de uno
     * a muchos entre la clase Country y Province
     *
     * Relacion uno a muchos.
     *
     */
    public function provinces(){
        return $this->hasMany(Province::class);
    }
}
