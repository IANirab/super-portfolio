<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $fillable = ['name', 'email', 'message'];
}
