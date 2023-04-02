@extends('layouts.fullLayoutMaster')
{{-- title --}}
{{-- header('Access-Control-Allow-Origin: *'); --}}
@section('title','Concurso de dibujo')

<style>
</style>

@section('content')
<div class="header-con">
  {{-- <div class="card-header ">
            <div class="brand-logo"> --}}
  <div class="row cint-header">
    <div class="col-6 d-flex justify-content-first">
      <img src="{{ asset('images/logo/logoTamaulipas2022bb.png') }}" alt="Logo Tamaulipas"
        class="logo" height="70" width="190">
    </div>

    <div class="col-6 d-flex justify-content-end" style="padding-top: 12px;">
      <button type="button" class="btn btn-info mr-1 mb-1">Acceder</button>
    </div>
  </div>
  {{-- </div>
        </div> --}}
</div>
<br>

<div class="img-res col-12">
  <div class="card" id="carousel-caption">

    <div class="card-content">
      <div class="card-body">
        <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            {{-- <li data-target="#carousel-example-caption" data-slide-to="0" class="active"></li> --}}
            {{-- <a href="#registro-con"><li class="active" style="background-color:#ab0033;"></li></a> --}}
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center">
              {{-- <img class="img-fluid" src="{{asset('images/slider/BANNER-DE-BIENVENIDA.png') }}"
              alt="First slide"> --}}
              <img class="img-fluid" src="{{ asset('images/slider/banner_plataforma2.jpg') }}"
                alt="First slide" width="85%" height="200px">
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="div-botones2 col-12">
      <div class="row">

        <div class="col-3 dashboard-users-success text-center">
          <div class="card">
            <div class="card-content">
              <div class="card-body py-1 post-centro zoomea">
                <a href="{{ route('alumno.bases-concurso') }}"> 

                  <img src="{{ asset('images/slider/bu1.jpg') }}" alt="Logo Tamaulipas"
                  class="res-logo">
                 </a>
                <div class="text-card2">Bases del concurso</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 dashboard-users-success text-center">
          <div class="card ">
            <div class="card-content">
              <div class="card-body py-1 post-centro zoomea">
                <a href="#premios-con">
                  <img src="{{ asset('images/slider/bu2.jpg') }}" alt="Logo Tamaulipas"
                    class="res-logo" >
                </a>
                <div class="text-card2">Premiación</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 dashboard-users-success text-center">
          <div class="card ">
            <div class="card-content">
              <div class="card-body py-1 post-centro zoomea">
                <a href="#dudas-con">
                  <img src="{{ asset('images/slider/bu4.jpg') }}" alt="Logo Tamaulipas"
                    class="res-logo" >
                </a>
                <div class="text-card2">Dudas y preguntas</div>
                {{-- text-muted line-ellipsis --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-3 dashboard-users-success text-center">
          <div class="card ">
            <div class="card-content">
              <div class="card-body py-1 post-centro zoomea">
                <a href="#registro-con">
                  <img src="{{ asset('images/slider/bu5.jpg') }}" alt="Logo Tamaulipas"
                    class="res-logo" >
                </a>
                <div class="text-card2">Registrate</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    {{-- ---------------------------- Formulario de registro ---------------------------------- --}}
    <br>
    <div id="registro-con">
      <div class="card">
        <div class="card-content">

          <div class="card-header">
            <h4 class="card-title text-center"><b>FORMULARIO DE REGISTRO</b></h4>
          </div>

          <div class="card-body" id="form-registro">
            <form action="{{ route('alumno.guardarRegistro') }}" method="POST"
              class="form form-vertical" enctype="multipart/form-data">
              @csrf
              <div class="form-body">
                <div class="row">

                  <div class="col-6">
                    <div class="form-group">
                      <label for="curp">Curp (Campo obligatorio)</label>
                      <input type="text" id="curp" class="form-control" name="curp" placeholder="Curp del alumno"
                        maxlength="18" required value="{{ old('curp') }}" onchange="curpValidarVacio()" style="text-transform: uppercase;">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <br>
                      {{-- <label for="curp">Curp</label> --}}
                      <button type="button" title="Filtrar por rango de fechas" class="btn btn-primary"
                        onclick="buscarCurp()">Buscar</button>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="nombre_alumno">Nombre</label>
                      {{-- value="{{ old('nombre_alumno') }}" --}}
                      <input type="text" id="nombre_alumno" class="form-control" name="nombre_alumno" placeholder="" maxlength="90"
                        readonly value="{{ old('nombre_alumno') }}">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="ap_paterno">Apellido paterno</label>
                      {{-- value="{{ old('ap_paterno') }}" --}}
                      <input type="text" id="ap_paterno" class="form-control" name="ap_paterno" placeholder=""
                        maxlength="50" readonly value="{{ old('ap_paterno') }}">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="ap_materno">Apellido materno</label>
                      {{-- value="{{ old('ap_materno') }}" --}}
                      <input type="text" id="ap_materno" class="form-control" name="ap_materno" placeholder=""
                        maxlength="90" readonly value="{{ old('ap_materno') }}">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="escuela">Escuela</label>
                      {{-- value="{{ old('escuela') }}" --}}
                      <input type="text" id="escuela" class="form-control" name="escuela" placeholder="" maxlength="90"
                        readonly value="{{ old('escuela') }}">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="gradoEscolar">Grado escolar</label>
                      {{-- value="{{ old('gradoEscolar') }}" --}}
                      <input type="text" id="gradoEscolar" class="form-control" name="gradoEscolar" placeholder=""
                        maxlength="30" readonly value="{{ old('gradoEscolar') }}">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="nombre_municipio">Municipio</label>
                      {{-- value="{{ old('nombre_municipio') }}" --}}
                      <input type="text" id="nombre_municipio" class="form-control" name="nombre_municipio" placeholder=""
                        maxlength="90" readonly value="{{ old('nombre_municipio') }}">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="telefono_titular">Teléfono (Campo obligatorio)</label>
                      <input type="number" id="telefono_titular" class="form-control @error('telefono_titular') is-invalid @enderror"
                        name="telefono_titular" value="{{ old('telefono_titular') }}"
                        placeholder="Teléfono del papá, mamá o persona adulta que considere" maxlength="10" onkeypress="return event.charCode>=48 && event.charCode<=57" required>
                      @error('telefono_titular')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="domicilio_casa">Dirección (Campo obligatorio)</label>
                      <input type="text" id="domicilio_casa" class="form-control @error('domicilio_casa') is-invalid @enderror"
                        name="domicilio_casa" value="{{ old('domicilio_casa') }}"
                        placeholder="Dirección de casa" maxlength="120" required>
                      @error('domicilio_casa')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="correo_titular">Correo electrónico (Campo obligatorio)</label>
                      <input type="email" id="correo_titular" class="form-control @error('correo_titular') is-invalid @enderror"
                        name="correo_titular" value="{{ old('correo_titular') }}"
                        placeholder="Correo electrónico del papá, mamá o persona adulta que considere" maxlength="50"
                        required>
                      @error('correo_titular')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <hr style="border: 1px solid #727e8c60" class="col-11">

                  <div class="col-6">
                    <div class="form-group">
                      <label for="nombre_personaje">Nombre del personaje (Campo obligatorio)</label>
                      <input type="text" id="nombre_personaje"
                        class="form-control @error('nombre_personaje') is-invalid @enderror" name="nombre_personaje"
                        value="{{ old('nombre_personaje') }}" placeholder="Nombre del personaje"
                        maxlength="150" required>
                      @error('nombre_personaje')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="valores_personaje">Valores del superhéroe o superheroína (Campo obligatorio)</label>
                      <input type="text" id="valores_personaje"
                        class="form-control @error('valores_personaje') is-invalid @enderror" name="valores_personaje"
                        value="{{ old('valores_personaje') }}" placeholder="Valores del personaje"
                        maxlength="256">
                      @error('valores_personaje')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="descripcion_personaje">Breve descripción del personaje (Campo obligatorio)</label>
                      <input type="text" id="descripcion_personaje"
                        class="form-control @error('descripcion_personaje') is-invalid @enderror"
                        name="descripcion_personaje" value="{{ old('descripcion_personaje') }}"
                        placeholder="Breve descripción del personaje" maxlength="256" required>
                      @error('descripcion_personaje')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="col-6 ocultar">
                    <input type="text" id="cct" class="form-control" name="cct" placeholder=""
                      maxlength="30" readonly>
                    <input type="text" id="nombre_cct" class="form-control" name="nombre_cct" placeholder=""
                      maxlength="30" readonly>
                    <input type="text" id="estatus_alumno" class="form-control" name="estatus_alumno" placeholder=""
                      maxlength="30" readonly>
                    <input type="text" id="genero_alumno" class="form-control" name="genero_alumno" placeholder="" maxlength="30"
                      readonly>
                    <input type="text" id="ciclo_escolar" class="form-control" name="ciclo_escolar" placeholder=""
                      maxlength="30" readonly>
                    <input type="text" id="turno" class="form-control" name="turno" placeholder=""
                      maxlength="30" readonly>
                    <input type="text" id="id_municipio" class="form-control" name="id_municipio" placeholder="" maxlength="30"
                      readonly>
                    <input type="text" id="grupo_alumno" class="form-control" name="grupo_alumno" placeholder=""
                      maxlength="30" readonly>
                    <input type="text" id="grado_alumno" class="form-control" name="grado_alumno" placeholder=""
                      maxlength="30" readonly>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <label for="">Archivo (Campo obligatorio)</label>
                      <label for="getFileDibujo"
                        class="btn btn-primary btn-block glow my-2 add-file-btn text-capitalize"><i
                          class="bx bx-plus"></i>Agregar archivo</label>
                      <input type="file" class="d-none @error('getFileDibujo') is-invalid @enderror" id="getFileDibujo"
                        name="getFileDibujo" required>
                      <span style="color: #ab0033; display: none;" id="archivoCargadoError">Falta cargar el archivo de imagen</span>
                      <span style="color: #ab0033; display: none;" id="archivoCargado">Archivo cargado</span>
                      <button id="verImagen" style="display: none;" type="button" class="btn btn-secondary"
                        data-toggle="modal" data-target="#exampleModalScrollable">Ver imagen</button>
                    </div>
                  </div>

                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mr-1 mb-1" id="registrar" disabled onclick="validarArchivo()">Registrar</button>
                    {{-- <a class="btn btn-light-secondary mr-1 mb-1" href="{{ url()->previous() }}"
                    role="button">Cancelar</a> --}}
                  </div>
                </div>
              </div>
            </form>
          </div>

          {{-- ------------------------------- formulario updated ------------------------- --}}
          <div class="card-body" id="form-actualizar" style="display: none;">
            {{-- {{ route('alumno.actualizarRegistro') }} --}}
            <form action="{{ route('alumno.actualizarRegistro') }}" method="POST" class="d-inline formulario-update" enctype="multipart/form-data">
              @csrf
              <div class="form-body">
                <div class="row">

                  {{-- <div class="col-6">
                    <div class="form-group">
                      <label for="curpUp">Curp</label>
                      <input type="text" id="curpUp" class="form-control" name="curpUp" placeholder="Curp del alumno"
                        maxlength="18" readonly>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      
                    </div>
                  </div> --}}

                  <div class="col-6">
                    <div class="form-group">
                      <label for="nombre_alumnoUp">Nombre</label>
                      <input type="text" id="nombre_alumnoUp" class="form-control" name="nombre_alumnoUp" placeholder="" maxlength="90"
                        readonly>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="ap_paternoUp">Apellido paterno</label>
                      <input type="text" id="ap_paternoUp" class="form-control" name="ap_paternoUp" placeholder=""
                        maxlength="30" readonly>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="ap_maternoUp">Apellido materno</label>
                      <input type="text" id="ap_maternoUp" class="form-control" name="ap_maternoUp" placeholder=""
                        maxlength="90" readonly>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="escuelaUp">Escuela</label>
                      <input type="text" id="escuelaUp" class="form-control" name="escuelaUp" placeholder="" maxlength="90"
                        readonly>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="gradoEscolarUp">Grado escolar</label>
                      <input type="text" id="gradoEscolarUp" class="form-control" name="gradoEscolarUp" placeholder=""
                        maxlength="30" readonly>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="municipioUp">Municipio</label>
                      <input type="text" id="municipioUp" class="form-control" name="municipioUp" placeholder=""
                        maxlength="90" readonly>
                    </div>
                  </div>

                  <div class="col-6" style="display: none;">
                    <div class="form-group">
                      <input type="text" id="idRegistro" class="form-control" name="idRegistro" placeholder=""
                        maxlength="30" readonly>
                    </div>
                  </div>
                  <div class="col-6" style="display: none;">
                    <div class="form-group">
                      <input type="text" id="urlRegistro" class="form-control" name="urlRegistro" placeholder=""
                        maxlength="90" readonly>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <label for="">Actualizar archivo</label>
                      <label for="getFileDibujoUpdate"
                        class="btn btn-primary btn-block glow my-2 add-file-btn text-capitalize"><i
                          class="bx bx-plus"></i>Agregar archivo</label>
                      <input type="file" class="d-none @error('getFileDibujoUpdate') is-invalid @enderror" id="getFileDibujoUpdate"
                        name="getFileDibujoUpdate" required>
                      <span style="color: #ab0033; display: none;" id="archivoCargadoErrorUp">Falta cargar el archivo de imagen</span>
                      <span style="color: #ab0033; display: none;" id="archivoCargadoUp">Archivo cargado</span>
                      <button id="verImagenUp" style="display: none;" type="button" class="btn btn-secondary"
                        data-toggle="modal" data-target="#exampleModalScrollableUp">Ver nueva imagen</button>
                    </div>
                  </div>

                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mr-1 mb-1" id="actualizarReg" onclick="validarArchivoRem()">Actualizar</button> 
                    {{-- onclick="validarArchivoRem()" --}}
                    {{-- <button class="btn btn-light-secondary mr-1 mb-1" role="button" onclick="regresarFormRegistro()">Regresar</button> --}}
                    <a class="btn btn-light-secondary mr-1 mb-1" href="{{ route('alumno.inicio') }}">Regresar</a>
                  </div>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="card-header">
        <hr>
      </div>
    </div>
    {{-- ----------------------------------------------------------- --}}

    <div id="premios-con">
      <div class="row">

        <div class="col-12">
          <div class="card-header">
            <h4 class="card-title text-center"><b>PREMIACIÓN</b></h4>
          </div>
        </div>

        {{-- <div class="col-3">
          <div class="card">
            <div class="card-content">
              <div class="card-body text-center">
                <img src="{{ asset('images/slider/bu2.jpg') }}" alt="Logo Tamaulipas" class="logo"
                  height="120" width="210">
              </div>
            </div>
          </div>
        </div> --}}

        <div class="col-2">
          <div class="card">
            <div class="card-content">
            </div>
          </div>
        </div>
        <div class="col-8">
          <div class="card">
            <div class="card-content">
              <div class="card-body text-center">

                  <h5> <b> Se otorgará un reconocimiento a las personas ganadoras. </b> </h5>

                  <h5>Los resultados del concurso se darán a conocer el 27 de abril de 2023 en los sitios de internet oficiales
                  de la Secretaría de Educación de Tamaulipas.</h5>

              </div>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="card">
            <div class="card-content">
            </div>
          </div>
        </div>

      </div>
    </div>

    {{-- ----------------------------------------------------------- --}}
    <div class="col-12">
      <div class="card-header">
        <hr>
      </div>
    </div>

    <div id="dudas-con">
      <div class="card">
        <div class="card-content">

          <div class="card-header">
            <h4 class="card-title text-center"><b>PREGUNTAS Y DUDAS</b></h4>
          </div>

          <div class="card-body">
            <form action="{{ route('alumno.enviarFomurlarioDudas') }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
              @csrf
              <div class="form-body">
                <div class="row">

                  <div class="col-6">
                    <div class="form-group">
                      <label for="nombrePregunta">Nombre</label>
                      <input type="text" id="nombrePregunta" class="form-control" name="nombrePregunta"
                        placeholder="Nombre completo" maxlength="90" required
                        value="{{ old('nombrePregunta') }}">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="correoPregunta">Correo</label>
                      <input type="email" id="correoPregunta" class="form-control" name="correoPregunta"
                        placeholder="Correo" maxlength="90" value="{{ old('correoPregunta') }}"
                        required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="mensajePregunta">Mensaje</label>
                      <input type="text" id="mensajePregunta" class="form-control" name="mensajePregunta"
                        placeholder="Dudas, preguntas, etc..." maxlength="150"
                        value="{{ old('mensajePregunta') }}" required>
                    </div>
                  </div>

                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mr-1 mb-1" id="registrar">Enviar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0">
        <button class="btn btn-primary btn-icon scroll-top" type="button" style="display: inline-block;"><i
            class="bx bx-up-arrow-alt"></i></button>
      </p>
    </footer>
  </div>

  <div class="col-md-6 col-12">
    <div class="card">
      <div class="card-content">

        <!--scrolling content Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header bg-info">
                <h5 class="modal-title white" id="exampleModalScrollableTitle">Archivo cargado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="bx bx-x"></i>
                </button>
              </div>
              <div class="modal-body">

                <div class="container">
                  <div class="center">

                    {{-- <img width="400" src="{{asset('images/dibujos-alumnos/spider1.jpg') }}">
                    src="{{ asset('images/dibujos-alumnos/goku.jpg') }}"--}}
                    <img id="imagenPrevisualizacion" width="400">

                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
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

  <div class="col-md-6 col-12">
    <div class="card">
      <div class="card-content">

        <!--scrolling content Modal -->
        <div class="modal fade" id="exampleModalScrollableUp" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header bg-info">
                <h5 class="modal-title white" id="exampleModalScrollableTitle">Archivo cargado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="bx bx-x"></i>
                </button>
              </div>
              <div class="modal-body">

                <div class="container">
                  <div class="center">

                    <img id="imagenPrevisualizacionUp" width="400">

                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
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

</div>

<!-- Modal Events end -->
@endsection
{{-- page scripts --}}
@section('page-scripts')

<script src="{{ asset('js/scripts/modal/components-modal.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  var input1 = document.getElementById('telefono_titular');

  input1.addEventListener('input', function () {
    if (this.value.length > 10)
      this.value = this.value.slice(0, 10);
  })

</script>

<script>

  // -------------------- validación de imagen para el formulario de registro 
  function validarArchivo(){

    
      var mostrarBoton = document.getElementById("verImagen");
      var mostrarMensaje = document.getElementById("archivoCargado");
      var mostrarMensajeImg = document.getElementById("archivoCargadoError");
      const $seleccionArchivos = document.querySelector("#getFileDibujo"),
        $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");
      const archivos = $seleccionArchivos.files;
      if (!archivos || !archivos.length) {
        // console.log("No imagen");
        $imagenPrevisualizacion.src = "";
        mostrarMensajeImg.style.display = "inline";
        mostrarBoton.style.display = "none";
        mostrarMensaje.style.display = "none";
        return;
      }

    // console.log("ValidarImg");
  }

  function is_img(idinputfile) {
    var fileInput = document.getElementById(idinputfile);
    var mostrarBoton = document.getElementById("verImagen");
    var mostrarMensaje = document.getElementById("archivoCargado");

    fileInput.addEventListener('change', function () {

      var filePath = this.value;
      var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
      console.log(filePath);
      if (!allowedExtensions.exec(filePath)) {
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
          title: 'Extensión no permitida. Utiliza: .jpeg/.jpg/.png/'
        })
        mostrarBoton.style.display = "none";
        mostrarMensaje.style.display = "none";
        fileInput.value = '';
        return false;

      } else {

        
        var mostrarMensajeImg = document.getElementById("archivoCargadoError");
        const $seleccionArchivos = document.querySelector("#getFileDibujo"),
          $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");
        // $seleccionArchivos.addEventListener("change", () => {
        const archivos = $seleccionArchivos.files;
        if (!archivos || !archivos.length) {
          console.log("No imagen");
          $imagenPrevisualizacion.src = "";
          return;
        }

        mostrarBoton.style.display = "inline";
        mostrarMensaje.style.display = "inline";
        mostrarMensajeImg.style.display = "none";
        const primerArchivo = archivos[0];
        const objectURL = URL.createObjectURL(primerArchivo);
        $imagenPrevisualizacion.src = objectURL;
        // });
        return true;
      }

    });
  }

  // -------------------- validación de imagen para el formulario de registro 


  // -------------------- validación de imagen para el formulario de actualizar 
    function validarArchivoRem(){

        var mostrarBotonUp = document.getElementById("verImagenUp");
        var mostrarMensajeUp = document.getElementById("archivoCargadoUp");
        var mostrarMensajeImgUp = document.getElementById("archivoCargadoErrorUp");
        const $seleccionArchivosUp = document.querySelector("#getFileDibujoUpdate"),
          $imagenPrevisualizacionUp = document.querySelector("#imagenPrevisualizacionUp");
        const archivos = $seleccionArchivosUp.files;
        if (!archivos || !archivos.length) {
          // console.log("No imagen");
          $imagenPrevisualizacionUp.src = "";
          mostrarMensajeImgUp.style.display = "inline";
          mostrarBotonUp.style.display = "none";
          mostrarMensajeUp.style.display = "none";
          return;
        }

      // console.log("ValidarImg");
    }

    function is_imgRem(idinputfile) {

        var fileInputUp = document.getElementById(idinputfile);
        var mostrarBotonUp = document.getElementById("verImagenUp");
        var mostrarMensajeUp = document.getElementById("archivoCargadoUp");

        fileInputUp.addEventListener('change', function () {

        var filePathUp = this.value;
        var allowedExtensionsUp = /(.jpg|.jpeg|.png)$/i;
        console.log(filePathUp);
        if (!allowedExtensionsUp.exec(filePathUp)) {
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
            title: 'Extensión no permitida. Utiliza: .jpeg/.jpg/.png/'
          })
          mostrarBotonUp.style.display = "none";
          mostrarMensajeUp.style.display = "none";
          fileInputUp.value = '';
          return false;

        } else {

          
          var mostrarMensajeImgUp = document.getElementById("archivoCargadoErrorUp");
          const $seleccionArchivosUp = document.querySelector("#getFileDibujoUpdate"),
            $imagenPrevisualizacionUp = document.querySelector("#imagenPrevisualizacionUp");
          // $seleccionArchivosUp.addEventListener("change", () => {
          const archivos = $seleccionArchivosUp.files;
          if (!archivos || !archivos.length) {
            console.log("No imagen");
            $imagenPrevisualizacionUp.src = "";
            return;
          }

          mostrarBotonUp.style.display = "inline";
          mostrarMensajeUp.style.display = "inline";
          mostrarMensajeImgUp.style.display = "none";
          const primerArchivoUp = archivos[0];
          const objectURLUp = URL.createObjectURL(primerArchivoUp);
          $imagenPrevisualizacionUp.src = objectURLUp;
          // });
          return true;
        }

        });
    }

    // -------------------- validación de imagen para el formulario de actualizar 
</script>

<script>
  is_img('getFileDibujo'); //Registro
  is_imgRem('getFileDibujoUpdate'); //Actualización
</script>


@if(session('registro') === 'Ok')
  <script>
    Swal.fire(
      '¡Registrado correctamente!',
      'El alumno ha sido registrado, hemos enviado un mensaje con sus datos al correo proporcionado',
      'success'
    )

  </script>
@endif

@if(session('registro') === 'updateOk')
  <script>
    Swal.fire(
      '¡Actualizado correctamente!',
      'Se ha actualizado el registro',
      'success'
    )
  </script>
@endif

@if(session('registro') === 'No')
  <script>
    Swal.fire(
      '¡No se ha podido registrar!',
      'El alumno no ha sido registrado',
      'error'
    )

  </script>
@endif

@if(session('registro') === 'imagenNo')
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
        title: 'El archivo de imagen es obligatorio'
      })
  </script>
@endif

@if(session('registro') === 'yaRegistrado')
  <script>
    Swal.fire(
      '¡No se ha podido registrar!',
      'El alumno ya ha sido registrado',
      'error'
    )

  </script>
@endif

@if(session('registro') === 'imagenFormatoNo')
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
        title: 'Extensión no permitida. Utiliza: .jpeg/.jpg/.png/'
      })
  </script>
@endif

@if(session('enviarDudas') === 'Ok')
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
        icon: 'success',
        title: 'Mensaje enviado correctamente'
      })
  </script>
@endif

<script>
  $('.formulario-update').onclick(function(e){

    console.log("entro click submit");
    e.preventDefault();

    Swal.fire({
        title: '¿Estás seguro de actualizar el registro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ab0033',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
          this.submit();
        }
    })

  });
</script>

<script>

  function curpValidarVacio(){

    var curp_val = document.getElementById("curp");
    var inp_nombre = document.getElementById("nombre_alumno");
    var inp_apellido_p = document.getElementById("ap_paterno");
    var inp_apellido_m = document.getElementById("ap_materno");
    var inp_escuela = document.getElementById("escuela");
    var inp_grado_escolar = document.getElementById("gradoEscolar");
    var inp_municipio = document.getElementById("nombre_municipio");

    var curpAlumno = $('#curp').val();

    // if (curpAlumno == "") {
      console.log("esta vacio el input");
      inp_nombre.value = "";
      inp_apellido_p.value = "";
      inp_apellido_m.value = "";
      inp_escuela.value = "";
      inp_grado_escolar.value = "";
      inp_municipio.value = "";
    // } else {
    //   var mostrarBotonRegistrar = document.getElementById("registrar");
    //   mostrarBotonRegistrar.disabled = false;
    // }

  }


  $(document).ready(function () {

    

    var curpAlumno = $('#curp').val();

    if (curpAlumno == "") {
      console.log("esta vacio el input");
      inp_nombre.value = 1;
      inp_apellido_p.value = 1;
      inp_apellido_m.value = "";
      inp_escuela.value = "";
      inp_grado_escolar.value = "";
      inp_municipio.value = "";
    } else {
      var mostrarBotonRegistrar = document.getElementById("registrar");
      mostrarBotonRegistrar.disabled = false;
    }

  })

  function regresarFormRegistro(){
      var curp_label = document.getElementById("curp");
      curp_label.value = "";
      var mostrarFormUpdate = document.getElementById("form-actualizar");
      var mostrarFormRegistro = document.getElementById("form-registro");
      mostrarFormRegistro.style.display = "block";
      mostrarFormUpdate.style.display = "none";
  }

  function buscarTest(){
    
    var curpAlumno = $('#curp').val();
    $.ajax({
        url: "{{ route('alumno.buscarTest') }}",
        data: {
          valor: curpAlumno,
          "_token": "{{ csrf_token() }}",
        },
        dataType: "json",
        type: "POST",
        success: function (data) {

          console.log(data);
          console.log(data[0]);

        },
        error: function (data) {
          console.log("Error");
          console.log(data);
        }
    });

  }

  function buscarCurp() {

    // console.log("entro");

    var curpAlumno = $('#curp').val();

    if (curpAlumno == "") {

      console.log("esta vacio el input");
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
        title: 'El campo curp no puede ser vacío'
      })

    } else {

      // console.log("entro 2");

      $.ajax({
        url: "{{ route('alumno.buscarAlumno') }}",
        // url: "https://proyectoscete.tamaulipas.gob.mx/concursodedibujo/public/consultar-curp-exitente",
        data: {
          curpAlumno,
          "_token": "{{ csrf_token() }}",
        },
        dataType: "json",
        type: "POST",
        success: function (data) {

          // console.log(data);
          if (data[0] == 1) {

            var mostrarFormUpdate = document.getElementById("form-actualizar");
            var mostrarFormRegistro = document.getElementById("form-registro");

            console.log("alumno existente");
            console.log(data);
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
              title: 'El alumno ya ha sido registrado'
            })

            var mostrarBotonActualizar = document.getElementById("actualizarReg");
            mostrarBotonActualizar.disabled = false;

            var curp_valUp = document.getElementById("curpUp");
            var inp_nombreUp = document.getElementById("nombre_alumnoUp");
            var inp_apellido_pUp = document.getElementById("ap_paternoUp");
            var inp_apellido_mUp = document.getElementById("ap_maternoUp");
            var inp_escuelaUp = document.getElementById("escuelaUp");
            var inp_grado_escolarUp = document.getElementById("gradoEscolarUp");
            var inp_municipioUp = document.getElementById("municipioUp");
            var inp_idRegistroUp = document.getElementById("idRegistro");
            var inp_urlRegistroUp = document.getElementById("urlRegistro");

            inp_nombreUp.value = data[1][0].nombre_alumno;
            inp_apellido_pUp.value = data[1][0].ap_paterno;
            inp_apellido_mUp.value = data[1][0].ap_materno;
            inp_escuelaUp.value = data[1][0].nombre_cct + " - " + data[1][0].cct;
            inp_grado_escolarUp.value = data[1][0].grado_alumno + "° " + data[1][0].grupo_alumno;
            inp_municipioUp.value = data[1][0].nombre_municipio;
            inp_idRegistroUp.value = data[1][0].id_registro_concurso;
            inp_urlRegistroUp.value = data[1][0].url_archivo_dibujo;

            mostrarFormRegistro.style.display = "none";
            mostrarFormUpdate.style.display = "block";

          } else {

            $.ajax({
              url: "{{ route('alumno.buscar') }}",
              // url: "https://proyectoscete.tamaulipas.gob.mx/concursodedibujo/public/consultar-curp",
              data: {
                valor: curpAlumno,
                "_token": "{{ csrf_token() }}",
              },
              dataType: "json",
              type: "POST",
              success: function (data) {

                // console.log(data);
                // console.log(data[0]);

                if (data[1].Id_Nivel == 12 || data[1].Id_Nivel == 51) {

                  var mostrarBotonRegistrar = document.getElementById("registrar");
                  mostrarBotonRegistrar.disabled = false;

                  var curp_val = document.getElementById("curp");
                  var inp_nombre = document.getElementById("nombre_alumno");
                  var inp_apellido_p = document.getElementById("ap_paterno");
                  var inp_apellido_m = document.getElementById("ap_materno");
                  var inp_escuela = document.getElementById("escuela");
                  var inp_grado_escolar = document.getElementById("gradoEscolar");
                  var inp_municipio = document.getElementById("nombre_municipio");

                  var inp_clave_cct = document.getElementById("cct");
                  var inp_nombre_cct = document.getElementById("nombre_cct");
                  var inp_statusAlumno = document.getElementById("estatus_alumno");
                  var inp_AluSexo = document.getElementById("genero_alumno");
                  var inp_Ciclo_Escolar = document.getElementById("ciclo_escolar");
                  var inp_Desc_Turno = document.getElementById("turno");
                  var inp_id_cct = document.getElementById("id_municipio");
                  var inp_grupo_escolar = document.getElementById("grupo_alumno");
                  var inp_gradoEscolar2 = document.getElementById("grado_alumno");

                  inp_nombre.value = data[0][0].AluNombre;
                  inp_apellido_p.value = data[0][0].AluApePat;
                  inp_apellido_m.value = data[0][0].AluApeMat;
                  inp_escuela.value = data[0][0].nombrect + " - " + data[0][0].Clavecct;
                  inp_grado_escolar.value = data[0][0].Grado + "° " + data[0][0].Grupo;
                  inp_municipio.value = data[1].nombre;

                  inp_clave_cct.value = data[0][0].Clavecct;
                  inp_nombre_cct.value = data[0][0].nombrect;
                  inp_statusAlumno.value = data[0][0].Estatus;
                  inp_AluSexo.value = data[0][0].AluSexo;
                  inp_Ciclo_Escolar.value = data[0][0].Ciclo_Escolar;
                  inp_Desc_Turno.value = data[0][0].Desc_Turno;
                  inp_id_cct.value = data[1].id;
                  inp_grupo_escolar.value = data[0][0].Grupo;
                  inp_gradoEscolar2.value = data[0][0].Grado;

                } else {
                  Swal.fire(
                    '¡No se ha podido registrar!',
                    'La escuela a la que pertenece el alumno no participa en el concurso',
                    'error',
                  )
                }


              },
              error: function (data) {
                console.log("Error");

                var curp_val = document.getElementById("curp");
                var inp_nombre = document.getElementById("nombre_alumno");
                var inp_apellido_p = document.getElementById("ap_paterno");
                var inp_apellido_m = document.getElementById("ap_materno");
                var inp_escuela = document.getElementById("escuela");
                var inp_grado_escolar = document.getElementById("gradoEscolar");
                var inp_municipio = document.getElementById("nombre_municipio");
                inp_nombre.value = "";
                inp_apellido_p.value = "";
                inp_apellido_m.value = "";
                inp_escuela.value = "";
                inp_grado_escolar.value = "";
                inp_municipio.value = "";

                Swal.fire(
                  '¡No se encontraron resultados!',
                  'No se ha encontrado información con el curp proporcionado',
                  'warning'
                )

              }

            });
          }

        },
        error: function (data) {

          console.log("Error buscar alumno existente");

        }

      });

    }
  }

</script>

@endsection
