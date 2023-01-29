<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Address;
use Illuminate\Routing\Events\Routing;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Esta propiedad contiene los atributos de la clase
     * que se permiten ser llenados mediante asignación masiva
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',     // Nombre del usuario
        'email',    // Correo electrónico del usuario
        'password', // Contraseña del usuario
    ];

    /**
     * Esta propiedad protegida contiene un arreglo
     * de los campos que no se deben mostrar cuando
     * se impriman los datos del usuario
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',         // Contraseña del usuario
        'remember_token', // Token de recuerdo para mantener la sesión iniciada
    ];

    /**
     * Los atributos que deben emitirse.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Esta función establece una relación entre la clase User
     * y la clase Address
     *
     * Relacion uno a muchos (inversa)
     *
     *  @return hasMany
     */
    public function address(){
        return $this->belongsTo(Address::class);
    }

    //TODO: Relaciones de muchos a muchos
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    /**
     * Esta función establece una relación polimorfica
     * entre la clase User y la clase Image
     *
     * @return morphOne
     */
    public function image()
    {
        // Se utiliza el método morphOne para establecer una relación
        //polimórfica entre el modelo y la imagen
        return $this->morphOne(image::class, 'imageable');
    }
}
