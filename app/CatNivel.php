<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatNivel extends Model
{
    protected $connection = "insumos";
    protected $primaryKey = 'Id_Nivel';
    protected $table = 'cat_nivel'; 
    protected $fillable = [
        'Nombre_Nivel',
    ];

}
