<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gerente extends Model
{
	protected $table = "Gerente";
        protected $fillable = ['id','login','senha','email'];
        protected $hidden = ['updated_at','created_at'];

}
