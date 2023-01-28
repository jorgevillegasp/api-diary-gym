<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Los atributos que deben ocultarse para la serialización.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Los atributos que deben emitirse.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function rol()
    {
        return $this->hasOne(Rol::class);
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
     * @return morphOne
     */
    public function image()
    {
        return $this->morphOne(image::class, 'imageable');
    }
}
