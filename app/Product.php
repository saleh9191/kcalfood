<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'date', 'calories', 'calories_from_fat', 'total_fat', 'trans_fat'
        , 'saturated_fat', 'cholesterol', 'sodium', 'total_carbohydrate', 'dietary_fiber', 'sugars'
        , 'protein', 'vitamin_A', 'vitamin_C', 'calcium', 'iron', 'vitamin_d', 'potassium', 'serving_size'];




    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function compeny()
    {
        return $this->belongsTo(Compeny::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

}

