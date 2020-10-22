<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
   protected $fillable=['title','content','author','imageurl'];
}
