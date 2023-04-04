<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroConcursoPA extends Model
{
    // protected $connection = "concursodd_vs"; 
    protected $primaryKey = 'id_registro_concurso';
    protected $table = 'cdvs_registro_concurso'; 
    protected $fillable = [
        'folio',
        'curp',
        'nombre_alumno',
        'ap_paterno',
        'ap_materno',
        'genero_alumno',
        'cct',
        'nombre_cct',
        'grado_alumno',
        'grupo_alumno',
        'estatus_alumno',
        'ciclo_escolar',
        'turno',
        'id_municipio',
        'nombre_municipio',
        'telefono_titular',
        'domicilio_casa',
        'correo_titular',
        'nombre_personaje',
        'valores_personaje',
        'descripcion_personaje',
        'url_archivo_dibujo',
        'observaciones',
        'nivel_id', 
        'estatus_id',
        'estatus_eval_id',
    ];

    // valida que sea admin para traer todos los registros
    public function scopeValidRol($query){
        $user = auth()->user();
        if($user->hasRole('Jurado_concurso')){
            return $query->where("cdvs_registro_concurso.estatus_id", 2);
        }
    }

    public function scopeValidRolUser($query){
        $user = auth()->user();
        if($user->hasRole('Jurado_concurso')){
            return $query->addSelect("J as Rol");
        }elseif($user->hasRole('Admin_concurso')){
            //return $query->addSelect("A as Rol");
            return $query->addSelect('A as Rol');
            
        }else{
            return $query->addSelect("SA as Rol");
        }
    }

    public function scopeValidEstatus($query, $estatus, $estatus_eval) {
    	if ($estatus != 0) {
    		// return $query->where('registro_concurso.estatus_id',$estatus)->where('registro_concurso.estatus_eval_id',3);
            // return $query->where('registro_concurso.estatus_id',$estatus)->where('registro_concurso.estatus_eval_id',$estatus_eval);

            if($estatus == 1) {
                return $query->where('cdvs_registro_concurso.estatus_id',$estatus)->where('cdvs_registro_concurso.estatus_eval_id',3);
            }elseif($estatus == 2) {
                return $query->where('cdvs_registro_concurso.estatus_id',$estatus)->where('cdvs_registro_concurso.estatus_eval_id',$estatus_eval);
            }else{
                return $query->where('cdvs_registro_concurso.estatus_id',$estatus)->where('cdvs_registro_concurso.estatus_eval_id',3);
            }
    	}
    }

    public function scopeValidEstatusEval($query, $estatus, $estatus_eval) {
        $user = auth()->user();
    	// if ($estatus_eval != 0) {
    	// 	// return $query->where('cdvs_registro_concurso.estatus_eval_id',$estatus_eval)->where('cdvs_registro_concurso.estatus_id',2);
        //     return $query->where('cdvs_registro_concurso.estatus_eval_id',$estatus_eval)->where('cdvs_registro_concurso.estatus_id',$estatus);
    	// }
        if($user->hasRole('Jurado_concurso')){
            $estatus2=2;
            if ($estatus_eval != 0) {
                return $query->where('cdvs_registro_concurso.estatus_eval_id',$estatus_eval)->where('cdvs_registro_concurso.estatus_id',$estatus2);
            }
        }else{
            if ($estatus_eval != 0) {
                return $query->where('cdvs_registro_concurso.estatus_eval_id',$estatus_eval)->where('cdvs_registro_concurso.estatus_id',$estatus);
            }
        }
    }

    
    public function scopeFiltrosAlumnosRegistrados($query, $req) {

    	if (isset($req['id_municipio'])) {
            if ($req['id_municipio'] != 0 && $req['id_municipio'] != '0') {
                $query = $query->where('cdvs_registro_concurso.id_municipio',$req['id_municipio']);
            }
    	}
    	if (isset($req['grado'])) {
            if ($req['grado'] != 0 && $req['grado'] != '0') {
                $query = $query->where('cdvs_registro_concurso.grado_alumno',$req['grado']);
            }
    	}
    	if (isset($req['region'])) {
            if ($req['region'] != 0 && $req['region'] != '0') {
                $query = $query->where('cat_regiones.Id_Region',$req['region']);
            }
    	}
    	if (isset($req['nivel'])) {
            if ($req['nivel'] != 0 && $req['nivel'] != '0') {
                $query = $query->where('cdvs_registro_concurso.nivel_id',$req['nivel']);
            }
    	}

        return $query;
    }

    public function scopeValidMunicipio($query, $municipio) {
    	if ($municipio != 0) {
            // if($region !=0){
            //     return $query->where('cdvs_registro_concurso.id_municipio',$municipio)->where('cat_regiones.Id_Region',$region);
            // }else{
            //     return $query->where('cdvs_registro_concurso.id_municipio',$municipio);
            // }
            return $query->where('cdvs_registro_concurso.id_municipio',$municipio);
    	}
    }

    public function scopeValidRegion($query, $region) { //////?????
    	if ($region != 0) {
            // if($municipio !=0){
            //     return $query->where('cat_regiones.Id_Region',$region)->where('cdvs_registro_concurso.id_municipio',$municipio);
            // }else{
            //     return $query->where('cat_regiones.Id_Region',$region);
            // }
            return $query->where('cat_regiones.Id_Region',$region);
    	}
    }

    public function scopeValidNivel($query, $nivel) {
    	if ($nivel != 0) {
    		return $query->where('cdvs_registro_concurso.nivel_id',$nivel);
    	}
    }

    public function scopeValidGrado($query, $grado) {
    	if ($grado != 0) {
    		return $query->where('cdvs_registro_concurso.grado_alumno',$grado);
    	}
    }

    // public function scopeValidSelect($query, $grado) {
    //     select * from insumos.users u join insumos.model_has_roles mr on u.id=mr.model_id
    //     join insumos.roles r on mr.role_id=r.id
    //     return $query->select(DB::raw("(SELECT sum(CASE WHEN e1.user_id = 35 THEN e1.total END) FROM evaluacion_concurso e1 WHERE e1.registro_concurso_id=registro_concurso.id_registro_concurso) AS Juez1")); 
    // }

}
