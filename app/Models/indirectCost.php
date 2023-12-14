<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indirectCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'amount',
        'price',
        'category_indirect_costs_id',
    ];

    //relacion de muchos a uno con la tabla category_indirect_costs
    public function category_indirect_costs(){
        return $this->belongsTo(categoryIndirectCost::class);
    }
}
