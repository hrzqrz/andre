<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    

    // public function setNameAttribute($value)
    // {
    //     $this->attributes['name'] = $value;
    //     $this->attributes['slug'] = str_slug($value);
    // }

    public function presentPrice()
    {
        return money_format('$%i', $this->price / 100 );
    }
}
