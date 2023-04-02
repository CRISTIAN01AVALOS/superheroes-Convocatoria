<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $connection = "insumos";
    protected $primaryKey = 'id_Region';
    protected $table = 'cat_regiones'; 
    protected $fillable = [
        'Region',
    ];

}
