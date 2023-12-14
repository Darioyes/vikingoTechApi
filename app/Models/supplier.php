<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nit',
        'phone1',
        'phone2',
        'address',
        'email',
        'description',
        'cities_id',
    ];

    //relacion de uno a muchos con la tabla purcharse_orders
    public function purcharseOrders()
    {
        return $this->hasMany(purcharseOrder::class);
    }

    //relacion de uno a uno con la tabla city
    public function city()
    {
        return $this->bhasOne(city::class);
    }
}
