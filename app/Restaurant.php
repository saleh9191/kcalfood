<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['title', 'description'];


    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}


