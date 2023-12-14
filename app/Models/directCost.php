<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class directCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'category_direct_costs_id',
    ];

    //relacion de muchos a uno con la tabla category_direct_costs
    public function category_direct_costs(){
        return $this->belongsTo(categoryDirectCost::class);
    }
}
