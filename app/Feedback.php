<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['title', 'subject', 'date','email','name','phoneNumber'];
}
