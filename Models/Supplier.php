<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    protected $fillable = ['first_Name','last_Name','email','address','mobile1','mobile2','payment_Type'];
}
