<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model {

    protected $fillable = ['id', 'semestre', 'curso_id'];
    protected $hidden = ['updated_at', 'created_at'];

}
