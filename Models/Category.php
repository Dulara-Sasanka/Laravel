<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['items','quantity','units'];

    public function good()
{
    return $this->belongsTo(Good::class, 'good_id');
}

}

