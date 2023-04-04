<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelJuezEvaluacion extends Model
{
    // protected $connection = "concursodd_vs"; 
    protected $primaryKey = 'id_juez_evaluacion';
    protected $table = 'rel_juez_evaluacion'; 
    protected $fillable = [
        'user_id',
        'registro_concurso_id',
        'evaluacion_concurso_id',
    ];

    //valida que sea admin para traer todos los registros
    public function scopeValidRolJuez($query){
        $user = auth()->user();
        if($user->hasRole('Jurado_concurso')){
            return $query->where('rel_juez_evaluacion.user_id', "=", auth()->user()->id) ;
        }

        // if($user->hasRole('Admin_concurso')){
        //     return $query->where('rel_juez_evaluacion.user_id', "=", auth()->user()->id) 
        //     ->where('rel_juez_evaluacion.registro_concurso_id', "=", $id);
        // }
    }

}