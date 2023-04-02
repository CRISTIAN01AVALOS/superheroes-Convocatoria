<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $connection = "insumos";
    protected $primaryKey = 'id';
    protected $table = 'cat_municipios'; 
    protected $fillable = [
        'nombre',
        'id_region',
    ];

}
