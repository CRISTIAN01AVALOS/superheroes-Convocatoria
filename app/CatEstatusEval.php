<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatEstatusEval extends Model
{
    protected $connection = "concursodd_vs";
    protected $primaryKey = 'id_estatus_eval';
    protected $table = 'cat_estatus_eval'; 
    protected $fillable = [
        'desc_estatus_eval',
    ];
}