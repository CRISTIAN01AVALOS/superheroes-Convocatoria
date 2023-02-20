<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroConcurso extends Model
{
    // protected $primaryKey = 'id_registro_concurso';

    // protected $table = 'registro_concurso';
    // protected $fillable = [
    //     'folio',
    //     'curp',
    //     'nombre_alumno',
    //     'ap_paterno',
    //     'ap_materno',
    //     'genero_alumno',
    //     'cct',
    //     'nombre_cct',
    //     'grado_alumno',
    //     'grupo_alumno',
    //     'estatus_alumno',
    //     'ciclo_escolar',
    //     'turno',
    //     'id_municipio',
    //     'telefono_titular',
    //     'domicilio_casa',
    //     'correo_titular',
    //     'nombre_personaje',
    //     'valores_personaje',
    //     'descripcion_personaje',
    //     'url_archivo_dibujo',
    // ];

    protected $connection = "pcete";
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
        'telefono_titular',
        'domicilio_casa',
        'correo_titular',
        'nombre_personaje',
        'valores_personaje',
        'descripcion_personaje',
        'url_archivo_dibujo',
    ];

}
