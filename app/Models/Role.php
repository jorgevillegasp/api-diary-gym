<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Esta función establece una relación entre la clase
     * actual (Role) y la clase User
     *
     * Relacion de muchos a muchos
     */
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
