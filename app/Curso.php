<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['id','nome','coordenador'];
    protected $hidden = ['updated_at','created_at'];
}
