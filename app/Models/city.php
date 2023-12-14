<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
    ];

    //relacion uno a muchos con la tabla users
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
