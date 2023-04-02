<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroTrabajo extends Model
{
    //
    protected $connection = "insumos";

    // protected $primaryKey = 'id_registro_concurso';

    protected $table = 'cat_centrosDeTrabajo';
    protected $fillable = [];
}
