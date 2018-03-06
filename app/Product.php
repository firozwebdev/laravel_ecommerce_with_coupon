<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getPriceAttribute($value){
        return '$'. $value / 1000;
    }
}
