<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $fillable = ['category', 'name', 'link', 'img'];
}
