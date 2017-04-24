<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
        protected $fillable = ['id','nome'];
        protected $hidden = ['updated_at','created_at'];
}
