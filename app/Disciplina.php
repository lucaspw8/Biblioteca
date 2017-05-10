<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
        protected $fillable = ['id','nome','id_sem','curso_id'];
        protected $hidden = ['updated_at','created_at'];
        
        public function livros(){
            return $this->belongsToMany(Livro::class,'rel_disciplinas_livros');
        }
}
