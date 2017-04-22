<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['id','login','senha','email'];
    protected $hidden = ['updated_at','created_at'];
}
