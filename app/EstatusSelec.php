<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstatusSelec extends Model
{
    // protected $connection = "concursodd_vs";
    protected $primaryKey = 'id_estatus_selec';
    protected $table = 'cat_estatus_selec'; 
    protected $fillable = [
        'desc_estatus_selec',
    ];
}