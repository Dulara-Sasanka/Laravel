<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediant extends Model
{
    protected $table = 'ingrediants';

    protected $fillable = ['a','b','c','d','e','f','g','h','i','j'];

    public function product()
{
    return $this->belongsTo(Product::class, 'product_id');
}
}
