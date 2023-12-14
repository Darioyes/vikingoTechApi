<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carousel extends Model
{
    use HasFactory;
    protected $fillable = [
        'carousel',
        'discount',
        'image',
        'product_id',
    ];
    
    //relacion de muchos a uno con la tabla products
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
