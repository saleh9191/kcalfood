<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

// many to many
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

}