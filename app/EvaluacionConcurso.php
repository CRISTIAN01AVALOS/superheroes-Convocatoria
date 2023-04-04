<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionConcurso extends Model
{
    // protected $connection = "concursodd_vs"; 
    protected $primaryKey = 'id_evaluacion_concurso';
    protected $table = 'evaluacion_concurso'; 
    protected $fillable = [
        'tecnica',
        'repre_region',
        'desc_personaje',
        'originalidad',
        'total',
        'registro_concurso_id',
        'user_id',
    ];

     //valida que sea admin para traer todos los registros
     public function scopeValidRolJuez($query){
        $user = auth()->user();
        if($user->hasRole('Jurado_concurso')){
            return $query->where('evaluacion_concurso.user_id', "=", auth()->user()->id) ;
        }
    }
}