<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryIndirectCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    //relacion de uno a muchos con la tabla indirect_costs
    public function indirect_costs(){
        return $this->hasMany(IndirectCost::class);
    }
}
