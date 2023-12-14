<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Controllers\VikingoRolController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'gender',
        'birthday',
        'phone1',
        'phone2',
        'address',
        'password',
        'cities_id',
        'vikingo_rol_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //relacion muchos a uno con la tabla cities
    public function cities()
    {
        return $this->belongsTo(City::class);
    }

    //relacion de uno a muchos con la tabla maintenances
    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }

    //relacion de muchos a uno con la tabla vikingo_roles
    public function vikingo_roles()
    {
        return $this->belongsTo(VikingoRolController::class);
    }

    //relacion de uno a muchos con la tabla sales
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

}
