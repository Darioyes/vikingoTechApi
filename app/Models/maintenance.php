<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maintenance extends Model
{
    use HasFactory;
    protected $fillable = [
        'product',
        'description',
        'reference',
        'price',
        'delivery_date',
        'image1',
        'image2',
        'image3',
        'image4',
        'advance',
        'users_id',
    ];
}
