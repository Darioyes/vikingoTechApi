<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Scalar\MagicConst\Dir;

class categoryDirectCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    //relacion de uno a muchos con la tabla direct_costs
    public function direct_costs(){
        return $this->hasMany(DirectCost::class);
    }
}
