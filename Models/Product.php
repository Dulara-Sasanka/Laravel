<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['Food_type','Main_category','Sub_category','potion','Recipe_time'];

   public function ingrediants()
{
    return $this->hasMany(Ingrediant::class, 'product_id');
}
}
