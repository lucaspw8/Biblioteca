<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Disciplina;
class Curso extends Model
{
    protected $fillable = ['id','nome','coordenador'];
    protected $hidden = ['updated_at','created_at'];
    

    public function disciplinas(){
    	return $this->hasMany('Disciplina');
    }
}

