<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatEstatus extends Model
{
    protected $connection = "concursodd_vs";
    protected $primaryKey = 'id_estatus';
    protected $table = 'cat_estatus'; 
    protected $fillable = [
        'desc_estatus',
    ];
}