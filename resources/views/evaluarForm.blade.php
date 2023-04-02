@extends('layouts.contentIncludes2')
@section('title','Concurso de dibujo')

@section('content')
<div class="container-fluid py-4 mt-3">
    <div class="row mt-4">
        <div class="d-flex justify-content-between ">
            <h1 class="mb-2 colorTitle">Evaluar </h1>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <!-- <p class="mb-0">Datos generales</p> -->
                        <p><h6 class="modal-title">Datos generales</h6></p>
                    </div>
                </div>

                <!-- ddddddddddddddddddddddd -->
                <div class="card-body">
                <form action="{{ route('alumno.guardarRegistro') }}" method="POST"
              class="form form-vertical" enctype="multipart/form-data">
              @csrf
              <div class="form-body">
                <div class="row">

                <div class="col-2 text-start">
                    <label for="curp">CURP:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="curp" class="SinNegrita">{{ $registro->curp }}</label>
                  </div>
                  <div class="col-2 text-start" >
                    <label for="escuela">Escuela:</label>
                  </div>
                  <div class="col-4 text-start">
                    <label id="escuela" class="SinNegrita">{{ $registro->cct." - ". $registro->nombre_cct }}</label>
                  </div>
<!-- 
                  <div class="col-2 text-start">
                    <label for="ap_paterno">Apellido Paterno:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="ap_paterno" class="SinNegrita">{{ $registro->ap_paterno }}</label>
                  </div>
                  <div class="col-2 text-start" >
                    <label for="gradoEscolar">Grado Escolar:</label>
                  </div>
                  <div class="col-4 text-start">
                    <label id="gradoEscolar" class="SinNegrita">{{ $registro->grado_alumno ."° ". $registro->grupo_alumno }}</label>
                  </div>

                  <div class="col-2 text-start">
                    <label for="ap_materno">Apellido Materno:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="ap_materno" class="SinNegrita">{{ $registro->ap_materno }}</label>
                  </div>
                  <div class="col-2 text-start" >
                    <label for="nombre_municipio">Municipio:</label>
                  </div>
                  <div class="col-4 text-start">
                    <label id="nombre_municipio" class="SinNegrita">{{ $registro->nombre_municipio }}</label>
                  </div>

                  <div class="col-2 text-start">
                    <label for="nombre_alumno">Nombre:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="nombre_alumno" class="SinNegrita">{{ $registro->nombre_alumno }}</label>
                  </div>
                  <div class="col-2 text-start" >
                  </div>
                  <div class="col-4 text-start">
                  </div>

                  <div class="col-2 text-start">
                    <label for="telefono_titular">Teléfono:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="telefono_titular" class="SinNegrita">{{ $registro->telefono_titular }}</label>
                  </div>
                  <div class="col-2 text-start" >
                  </div>
                  <div class="col-4 text-start">
                  </div> -->

                  <div class="col-2 text-start">
                    <label for="ap_paterno">Nombre Completo:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="ap_paterno" class="SinNegrita">{{ $registro->nombre_alumno." ". $registro->ap_paterno ." ". $registro->ap_materno }}</label>
                  </div>
                  <div class="col-2 text-start" >
                    <label for="gradoEscolar">Grado Escolar:</label>
                  </div>
                  <div class="col-4 text-start">
                    <label id="gradoEscolar" class="SinNegrita">{{ $registro->grado_alumno."° ".$registro->grupo_alumno }}</label>
                  </div>

                  <div class="col-2 text-start">
                    <label for="telefono_titular">Teléfono:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="telefono_titular" class="SinNegrita">{{ $registro->telefono_titular }}</label>
                  </div>
                  <div class="col-2 text-start" >
                    <label for="Nombre_Nivel">Nivel:</label>
                  </div>
                  <div class="col-4 text-start">
                    <label id="Nombre_Nivel" class="SinNegrita">{{ $registro->Nombre_Nivel }} </label>
                  </div>

                  <div class="col-2 text-start">
                    <label for="domicilio_casa">Dirección:</label>
                  </div>
                    <div class="col-4 text-start">
                  <label id="domicilio_casa" class="SinNegrita">{{ $registro->domicilio_casa }}</label>
                  </div>
                  <div class="col-2 text-start" >
                    <label for="nombre_municipio">Municipio:</label>
                  </div>
                  <div class="col-4 text-start">
                    <label id="nombre_municipio" class="SinNegrita">{{ $registro->nombre_municipio }}</label>
                  </div>
                  

                  <div class="col-2 text-start">
                    <label for="correo_titular">Correo:</label>
                  </div>
                    <div class="col-10 text-start">
                  <label id="correo_titular" class="SinNegrita">{{ $registro->correo_titular }}</label>
                  </div>

                  <hr style="border: 1px solid #727e8c60" class="col-11">  <!--//////DATOS DIBUJO-->

                  <p><h5 class="modal-title">Datos del Dibujo</h5></p>
                  
                  <hr style="border: 1px solid #727e8c60" class="col-11">

                  <div class="col-6">
                    <div class="row">
                      <div class="col-4 text-start">
                        <label for="nombre_personaje">Nombre del personaje:</label>
                      </div>
                      <div class="col-8 text-start">
                        <label id="nombre_personaje" class="SinNegrita">{{ $registro->nombre_personaje }}</label>
                      </div>

                      <div class="col-4 text-start">
                        <label for="valores_personaje">Valores del superhéroe o superheroína:</label>
                      </div>
                      <div class="col-8 text-start">
                        <label id="valores_personaje" class="SinNegrita">{{ $registro->valores_personaje }}</label>
                      </div>

                      <div class="col-4 text-start">
                        <label for="descripcion_personaje">Breve descripción del personaje:</label>
                      </div>
                      <div class="col-8 text-start text-justify" >
                        <label id="descripcion_personaje" class="SinNegrita">{{ $registro->descripcion_personaje }}</label>
                      </div>

                      <!-- <div class="col-4 text-start">
                        <label for="estatus_text">Estatus:</label>
                      </div>
                      <div class="col-8 text-start text-justify" >
                        <label id="estatus_text" style="color:#ab0033;"> -->
                       {{-- @if($registro->estatus_id==2 && $registro->estatus_eval_id==3)
                        Por Evaluar
                        @elseif($registro->estatus_id==2 && $registro->estatus_eval_id==1)
                        En Evaluación
                        @elseif($registro->estatus_id==2 && $registro->estatus_eval_id==2)
                        Evaluado
                        @enfif--}}
                        <!-- </label>
                      </div> -->
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <input type="hidden" id="url_archivo_dibujo"  value="{{ $registro->url_archivo_dibujo }}" >
                      <img id="imagenPrevisualizacion" class="img-fluid"> <!--width="400"-->
                    </div>
                  </div>
              <!-- COMO ESTABA ANTES DE REACOMODAR LOS DATOS 21/03/2023 -->
                  <!-- <div class="col-12">
                    <div class="form-group">
                      <label for="curp">Curp </label>
                      <label id="curp" class="SinNegrita">{{ $registro->curp }}</label>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="nombre_alumno">Nombre</label>
                      <label id="nombre_alumno" class="SinNegrita">{{ $registro->nombre_alumno }}</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="ap_paterno">Apellido paterno</label>
                      <label id="ap_paterno" class="SinNegrita">{{ $registro->ap_paterno }}</label>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="ap_materno">Apellido materno</label>
                      <label id="ap_materno" class="SinNegrita">{{ $registro->ap_materno }}</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="escuela">Escuela</label>
                      <label id="escuela" class="SinNegrita">{{ $registro->nombre_cct }}</label>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="gradoEscolar">Grado escolar</label>
                      <label id="gradoEscolar" class="SinNegrita">{{ $registro->grado_alumno }}</label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="nombre_municipio">Municipio</label>
                      <label id="nombre_municipio" class="SinNegrita">{{ $registro->nombre_municipio }}</label>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="telefono_titular">Teléfono</label>
                      <label id="telefono_titular" class="SinNegrita">{{ $registro->telefono_titular }}</label>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="domicilio_casa">Dirección</label>
                      <label id="domicilio_casa" class="SinNegrita">{{ $registro->domicilio_casa }}</label>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="correo_titular">Correo electrónico</label>
                      <label id="correo_titular" class="SinNegrita">{{ $registro->correo_titular }}</label>
                    </div>
                  </div>

                  <hr style="border: 1px solid #727e8c60" class="col-11">

                  <p><h6 class="modal-title">Datos del Dibujo</h6></p>
                  
                  <hr style="border: 1px solid #727e8c60" class="col-11">

                  <div class="col-6">
                    <div class="form-group">
                      <label for="nombre_personaje">Nombre del personaje</label>
                      <label id="nombre_personaje" class="SinNegrita">{{ $registro->nombre_personaje }}</label>
                      <br><br>
                      <label for="valores_personaje">Valores del superhéroe o superheroína</label>
                      <label id="valores_personaje" class="SinNegrita">{{ $registro->valores_personaje }}</label>
                      <br><br>
                      <label for="descripcion_personaje">Breve descripción del personaje</label>
                      <label id="descripcion_personaje" class="SinNegrita">{{ $registro->descripcion_personaje }}</label>
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                      <input type="hidden" id="url_archivo_dibujo"  value="{{ $registro->url_archivo_dibujo }}" >
                      <img id="imagenPrevisualizacion"  width="400">
                    </div>
                  </div> -->

                </div>
              </div>
            </form>
          </div>
<!-- ddddddddddddddd -->
          <div class="card-body">
            <hr style="border: 1px solid #727e8c60" class="col-11">

            <h6 class="modal-title">Criterios por Evaluar</h6>

            <hr style="border: 1px solid #727e8c60" class="col-11">
                <div class="card-body">
                    <form action="{{ route('guardarEvaluacion') }}" method="POST"
                    class="form form-vertical" enctype="multipart/form-data">
                    @csrf
                        <input class="form-control" type="hidden" name="hId" id="hid" value="{{ $id }}">
                        <p class="text-uppercase text-sm">Técnica</p>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <!-- <label for="example-text-input" class="form-control-label">Técnica</label> -->
                                    <!-- <label for="example-text-input" class="form-control-label text-uppercase text-sm">Técnica </label> -->
                                    <!-- <input class="form-control" type="text" value="lucky.jesse"> -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbTecnica" id="rbTecnica1" value="1" checked>
                                        <label class="form-check-label" for="rbTecnica1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbTecnica" id="rbTecnica2" value="2">
                                        <label class="form-check-label" for="rbTecnica2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbTecnica" id="rbTecnica3" value="3">
                                        <label class="form-check-label" for="rbTecnica3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbTecnica" id="rbTecnica4" value="4">
                                        <label class="form-check-label" for="rbTecnica4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbTecnica" id="rbTecnica5" value="5">
                                        <label class="form-check-label" for="rbTecnica5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbTecnica" id="rbTecnica6" value="6">
                                        <label class="form-check-label" for="rbTecnica6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbTecnica" id="rbTecnica7" value="7">
                                        <label class="form-check-label" for="rbTecnica7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbTecnica" id="rbTecnica8" value="8">
                                        <label class="form-check-label" for="rbTecnica8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbTecnica" id="rbTecnica9" value="9">
                                        <label class="form-check-label" for="rbTecnica9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbTecnica" id="rbTecnica10" value="10">
                                        <label class="form-check-label" for="rbTecnica10">10</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Representación de la región</p>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbRegion" id="rbRegion1" value="1" checked>
                                        <label class="form-check-label" for="rbRegion1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbRegion" id="rbRegion2" value="2">
                                        <label class="form-check-label" for="rbRegion2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbRegion" id="rbRegion3" value="3">
                                        <label class="form-check-label" for="rbRegion3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbRegion" id="rbRegion4" value="4">
                                        <label class="form-check-label" for="rbRegion4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbRegion" id="rbRegion5" value="5">
                                        <label class="form-check-label" for="rbRegion5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbRegion" id="rbRegion6" value="6">
                                        <label class="form-check-label" for="rbRegion6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbRegion" id="rbRegion7" value="7">
                                        <label class="form-check-label" for="rbRegion7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbRegion" id="rbRegion8" value="8">
                                        <label class="form-check-label" for="rbRegion8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbRegion" id="rbRegion9" value="9">
                                        <label class="form-check-label" for="rbRegion9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbRegion" id="rbRegion10" value="10">
                                        <label class="form-check-label" for="rbRegion10">10</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Descripción del personaje</p>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbPersonaje" id="rbPersonaje1" value="1" checked>
                                        <label class="form-check-label" for="rbPersonaje1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbPersonaje" id="rbPersonaje2" value="2">
                                        <label class="form-check-label" for="rbPersonaje2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbPersonaje" id="rbPersonaje3" value="3">
                                        <label class="form-check-label" for="rbPersonaje3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbPersonaje" id="rbPersonaje4" value="4">
                                        <label class="form-check-label" for="rbPersonaje4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbPersonaje" id="rbPersonaje5" value="5">
                                        <label class="form-check-label" for="rbPersonaje5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbPersonaje" id="rbPersonaje6" value="6">
                                        <label class="form-check-label" for="rbPersonaje6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbPersonaje" id="rbPersonaje7" value="7">
                                        <label class="form-check-label" for="rbPersonaje7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbPersonaje" id="rbPersonaje8" value="8">
                                        <label class="form-check-label" for="rbPersonaje8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbPersonaje" id="rbPersonaje9" value="9">
                                        <label class="form-check-label" for="rbPersonaje9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbPersonaje" id="rbPersonaje10" value="10">
                                        <label class="form-check-label" for="rbPersonaje10">10</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Originalidad</p>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbOriginalidad" id="rbOriginalidad1" value="1" checked>
                                        <label class="form-check-label" for="rbOriginalidad1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbOriginalidad" id="rbOriginalidad2" value="2">
                                        <label class="form-check-label" for="rbOriginalidad2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbOriginalidad" id="rbOriginalidad3" value="3">
                                        <label class="form-check-label" for="rbOriginalidad3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbOriginalidad" id="rbOriginalidad4" value="4">
                                        <label class="form-check-label" for="rbOriginalidad4">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbOriginalidad" id="rbOriginalidad5" value="5">
                                        <label class="form-check-label" for="rbOriginalidad5">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbOriginalidad" id="rbOriginalidad6" value="6">
                                        <label class="form-check-label" for="rbOriginalidad6">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbOriginalidad" id="rbOriginalidad7" value="7">
                                        <label class="form-check-label" for="rbOriginalidad7">7</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbOriginalidad" id="rbOriginalidad8" value="8">
                                        <label class="form-check-label" for="rbOriginalidad8">8</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbOriginalidad" id="rbOriginalidad9" value="9">
                                        <label class="form-check-label" for="rbOriginalidad9">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rbOriginalidad" id="rbOriginalidad10" value="10">
                                        <label class="form-check-label" for="rbOriginalidad10">10</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end col-md-12 ">
                            <!-- <a class="btn btn-secondary mt-4" href="{{ route('panelAdmin') }}" >Cancelar</a> -->
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cancelRevisionModal">
                              Cancelar
                            </button>
                            <button type="button" class="btn colorBtnPrincipal" data-bs-toggle="modal" data-bs-target="#AceptaEvaluarModal">Evaluar</button>  
                            <!-- <button type="submit" class="btn mt-4 colorBtnPrincipal">Evaluar</button>  -->
                            <!-- <button type="submit" class="btn btn-primary mr-1 mb-1" id="registrar" disabled onclick="validarArchivo()">Registrar</button> -->

                            <!-- FIN MODAL CONFIRMACION -->
                              <div class="modal fade" id="AceptaEvaluarModal" tabindex="-1" aria-labelledby="AceptaEvaluarModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="AceptaEvaluarModalLabel">Guardar Evaluación</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                      ¿Esta seguro que desea Evaluar este dibujo?
                                      <br><br>
                                      Una vez evaluado ya no podrá modificar la evaluación.
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancelar</button>
                                      <button type="submit" class="btn colorBtnPrincipal" btn="btnAceptarEval" >Aceptar</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- FIN MODAL CONFIRMACION-->
                        </div>

                        <!-- <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mr-1 mb-1" id="registrar" disabled onclick="validarArchivo()">Guardar</button>
                        </div> -->
                    </form>
                </div>
            </div>
</div>
        </div>
    </div>
</div>

<!-- MODAL MOSTRAR DIBUJO -->
<div class="col-md-6 col-12">
    <div class="card">
      <div class="card-content">

        <!--scrolling content Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Archivo cargado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              </div>
              <div class="modal-body">

                <div class="container">
                  <div class="center">

                    
                    <img id="imagenPrevisualizacion" width="400">
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                  <i class="bx bx-x d-block d-sm-none"></i>
                  <span class="d-none d-sm-block">Cerrar</span>
                </button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
<!-- FIN MODAL MOSTRAR DIBUJO -->

<!-- FIN MODAL CANCELAR -->
<div class="modal fade" id="cancelRevisionModal" tabindex="-1" aria-labelledby="cancelRevisionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cancelRevisionModalLabel">Salir de la Evaluación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Esta seguro que desea salir?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cancelar</button>
        <a class="btn colorBtnPrincipal" href="{{ route('panelAdmin') }}">Aceptar</a>
      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL CANCELAR-->


@endsection

@section('page-scripts')
<script src="{{ asset('js/scripts/modal/components-modal.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- <script src="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css"></script>
<script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script> -->
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        let url_dibujo =$("#url_archivo_dibujo").val();
       // console.log(url_dibujo);

        let imagenPrevisualizacionUp = document.querySelector("#imagenPrevisualizacion");
        let urlEditar = "{{ asset('dibujos_de_alumnos/:temp') }}";
        urlEditar = urlEditar.replace(':temp', url_dibujo);
        
        imagenPrevisualizacionUp.src = urlEditar;

        // $("#btnAceptarEval").click(function(){
        //   $("#btnAceptarEval").prop('disabled', true);
        // });
        
    });

    // function fnMostrarDibujo(){
    //     let url_dibujo =$("#url_archivo_dibujo").val();
    //     console.log(url_dibujo);

    //     let imagenPrevisualizacionUp = document.querySelector("#imagenPrevisualizacion");
    //     let urlEditar = "{{ asset('dibujos_de_alumnos/:temp') }}";
    //     urlEditar = urlEditar.replace(':temp', url_dibujo);
        
    //     imagenPrevisualizacionUp.src = urlEditar;
    // }  

</script>

@if(session('guardarEvaluacion') === 'errorEval')
  <script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'error',
        title: 'Ya ha sido Evaluado este dibujo'
      })
  </script>
@endif

@if (session('message'))
    <div class="alert alert-success text-center msg" id="message">
        <strong>{{ session('message') }}</strong>
    </div>
@endif
@endsection