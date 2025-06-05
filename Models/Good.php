<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
   protected $table = 'goods';

   protected $fillable = ['raw_type','raw_item'];

   public function categories()
{
    return $this->hasMany(Category::class, 'good_id');
}

}
