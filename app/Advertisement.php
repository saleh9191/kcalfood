<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = ['title', 'subject', 'date', 'email', 'name', 'phoneNumber'];


    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

}
