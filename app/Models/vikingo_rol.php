<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vikingo_rol extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_admin',
    ];
}
