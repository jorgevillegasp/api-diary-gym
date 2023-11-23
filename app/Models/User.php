<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Address;

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
        'name',         // Nombre
        'email',        // Correo electrónico
        'password',     // Contraseña
        'weight',       //Peso
        'stature',      //Estatura
        'birth_date',   //Fecha Nacimiento
        'status',       //estado
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
        'remember_token',   // Token de recuerdo para mantener la sesión iniciada
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
     */
    public function address(){
        return $this->belongsTo(Address::class);
    }

    /**
     * Esta función establece una relación polimorfica
     * entre la clase User y la clase Image
     *
     * Relacion uno a uno polimorfica
     *
     */
    public function image()
    {
        // Se utiliza el método morphOne para establecer una relación
        // polimórfica entre el modelo y la imagen
        return $this->morphOne(Image::class, 'imageable');
    }

    //? Relaciones de muchos a muchos
    /**
     * Esta función establece la relación entre el modelo User y el modelo Role.
     *
     * Relacion de muchos a muchos
     */
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    /**
     * Esta función establece la relación entre el modelo User y la tabla de rutinas
     *
     * Relacion de muchos a muchos
     */
    public function routines(){
        return $this->belongsToMany(Routine::class);
    }
}
