<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'amount',
        'total_sale',
        'total_cost',
        'user_id',
        'product_id',
    ];

    //relacion muchos a uno con la tabla users
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    //relacion muchos a uno con la tabla products
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
