<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
        protected $fillable = ['id','titulo','autor','qtd', 'disponivel'];
        protected $hidden = ['updated_at','created_at'];
       
        public function disciplinas(){
            
            return $this->belongsToMany(Disciplina::class ,'rel_disciplinas_livros');
        }
}
