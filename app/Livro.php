<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
        protected $fillable = ['id','titulo','autor','qtd', 'disponivel'];
        protected $hidden = ['updated_at','created_at'];
        /*
        public $regras = [
            'titulo'        => 'required|min:2|max:50',
            'autor'         => 'required|min:2|max:50',
            'qtd'           => 'required|numeric',
            'disponivel'    => 'required',
    ];
    */
}
