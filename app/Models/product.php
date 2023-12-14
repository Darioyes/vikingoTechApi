<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'reference',
        'barcode',
        'description',
        'stock',
        'sale_price',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'color',
        'category_id',
    ];

    //relacion de uno a muchos con la tabla sales
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

  //relacion de muchos a uno con la tabla categories
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
     //relacion de uno a muchos con la tabla carousels
    public function carousels()
    {
        return $this->hasMany(Carousel::class);
    }

    //relacion de uno a muchos con la tabla purcharse_orders
    public function purcharseOrders()
    {
        return $this->hasMany(PurcharseOrder::class);
    }
}
