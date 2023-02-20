@extends('layouts.fullLayoutMaster')
{{-- title --}}
{{-- header('Access-Control-Allow-Origin: *'); --}}
@section('title','Concurso de dibujo')


<style>

  .imgCenter {
    display: block;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
  }

  .divCenter {
    display: flex;
    justify-content: center;
    border: 1px solid black;
  }

  .container {
    height: 600px;
    position: relative;
    /* border: 3px solid #dbe4ed;  */
    /* Border color is optional */
  }

  .center {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }

  .cint-header {
    background-color: #ab0033 !important;
  }

  .ocultar {
    display: none;
  }

  .text-card {
    color: black !important;
    font-family: Arial, Helvetica, sans-serif !important;
  }

  .contenedor:hover .imagen {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
  }

  .contenedor {
    overflow: hidden;
  }

  img,
  img:hover,
  .post-centro,
  .post-centro:hover {
    transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
  }

  .zoomea:hover {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }

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

<div class="col-12">
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
              <img class="img-fluid" src="{{ asset('images/slider/banner_plataforma1.jpg') }}"
                alt="First slide" width="85%" height="200px">
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-12" style="width: 85%; padding-left: 12.5%;">
      <div class="row">

        <div class="col-sm-3 col-3 dashboard-users-success">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body py-1 post-centro zoomea">
                {{-- <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                            <i class="bx bx-briefcase-alt font-medium-5"></i>
                          </div> --}}
                <a href="{{ route('alumno.bases-concurso') }}">
                  <img src="{{ asset('images/slider/bu1.jpg') }}" alt="Logo Tamaulipas"
                    class="logo" height="100" width="190">
                </a>
                <div class="text-card">Bases del concurso</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-3 dashboard-users-success">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body py-1 post-centro zoomea">
                <a href="#premios-con">
                  <img src="{{ asset('images/slider/bu2.jpg') }}" alt="Logo Tamaulipas"
                    class="logo" height="100" width="190">
                </a>
                <div class="text-card">Premios</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-3 dashboard-users-danger">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body py-1 post-centro zoomea">
                <a href="#dudas-con">
                  <img src="{{ asset('images/slider/bu4.jpg') }}" alt="Logo Tamaulipas"
                    class="logo" height="100" width="190">
                </a>
                <div class="text-card">Dudas y preguntas</div>
                {{-- text-muted line-ellipsis --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-3 dashboard-users-success">
          <div class="card text-center">
            <div class="card-content">
              <div class="card-body py-1 post-centro zoomea">
                <a href="#registro-con">
                  <img src="{{ asset('images/slider/bu5.jpg') }}" alt="Logo Tamaulipas"
                    class="logo" height="100" width="190">
                </a>
                <div class="text-card">Resgistrate</div>
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

          <div class="card-body">
            <form action="{{ route('alumno.guardarRegistro') }}" method="POST"
              class="form form-vertical" enctype="multipart/form-data">
              @csrf
              <div class="form-body">
                <div class="row">

                  <div class="col-6">
                    <div class="form-group">
                      <label for="curp">Curp (Campo obligatorio)</label>
                      <input type="text" id="curp" class="form-control" name="curp" placeholder="Curp del alumno"
                        maxlength="18" required value="{{ old('curp') }}">
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
                      <label for="nombre">Nombre</label>
                      {{-- value="{{ old('nombre') }}" --}}
                      <input type="text" id="nombre" class="form-control" name="nombre" placeholder="" maxlength="90"
                        readonly value="{{ old('nombre') }}">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="apellidoPaterno">Apellido paterno</label>
                      {{-- value="{{ old('apellidoPaterno') }}" --}}
                      <input type="text" id="apellidoPaterno" class="form-control" name="apellidoPaterno" placeholder=""
                        maxlength="30" readonly value="{{ old('apellidoPaterno') }}">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="apellidoMaterno">Apellido materno</label>
                      {{-- value="{{ old('apellidoMaterno') }}" --}}
                      <input type="text" id="apellidoMaterno" class="form-control" name="apellidoMaterno" placeholder=""
                        maxlength="90" readonly value="{{ old('apellidoMaterno') }}">
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
                      <label for="municipio">Municipio</label>
                      {{-- value="{{ old('municipio') }}" --}}
                      <input type="text" id="municipio" class="form-control" name="municipio" placeholder=""
                        maxlength="90" readonly value="{{ old('municipio') }}">
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="telefono">Teléfono (Campo obligatorio)</label>
                      <input type="number" id="telefono" class="form-control @error('telefono') is-invalid @enderror"
                        name="telefono" value="{{ old('telefono') }}"
                        placeholder="Teléfono del papá, mamá o persona adulta que considere" maxlength="10" required>
                      @error('telefono')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="direccion">Dirección (Campo obligatorio)</label>
                      <input type="text" id="direccion" class="form-control @error('direccion') is-invalid @enderror"
                        name="direccion" value="{{ old('direccion') }}"
                        placeholder="Dirección de casa" maxlength="120" required>
                      @error('direccion')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="correo">Correo electrónico (Campo obligatorio)</label>
                      <input type="email" id="correo" class="form-control @error('correo') is-invalid @enderror"
                        name="correo" value="{{ old('correo') }}"
                        placeholder="Correo electrónico del papá, mamá o persona adulta que considere" maxlength="30"
                        required>
                      @error('correo')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <hr style="border: 1px solid #727e8c60" class="col-11">

                  <div class="col-6">
                    <div class="form-group">
                      <label for="nombrePersonaje">Nombre del personaje (Campo obligatorio)</label>
                      <input type="text" id="nombrePersonaje"
                        class="form-control @error('nombrePersonaje') is-invalid @enderror" name="nombrePersonaje"
                        value="{{ old('nombrePersonaje') }}" placeholder="Nombre del personaje"
                        maxlength="30" required>
                      @error('nombrePersonaje')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="valoresPersonaje">Valores del superhéroe o superheroína (Campo obligatorio)</label>
                      <input type="text" id="valoresPersonaje"
                        class="form-control @error('valoresPersonaje') is-invalid @enderror" name="valoresPersonaje"
                        value="{{ old('valoresPersonaje') }}" placeholder="Valores del personaje"
                        maxlength="90" required>
                      @error('valoresPersonaje')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="descripcionPersonaje">Breve descripción del personaje (Campo obligatorio)</label>
                      <input type="text" id="descripcionPersonaje"
                        class="form-control @error('descripcionPersonaje') is-invalid @enderror"
                        name="descripcionPersonaje" value="{{ old('descripcionPersonaje') }}"
                        placeholder="Breve descripcion del personaje" maxlength="120" required>
                      @error('descripcionPersonaje')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="col-6 ocultar">
                    <input type="text" id="clave_cct" class="form-control" name="clave_cct" placeholder=""
                      maxlength="30" readonly>
                    <input type="text" id="nombre_cct" class="form-control" name="nombre_cct" placeholder=""
                      maxlength="30" readonly>
                    <input type="text" id="estatusAlumno" class="form-control" name="estatusAlumno" placeholder=""
                      maxlength="30" readonly>
                    <input type="text" id="AluSexo" class="form-control" name="AluSexo" placeholder="" maxlength="30"
                      readonly>
                    <input type="text" id="Ciclo_Escolar" class="form-control" name="Ciclo_Escolar" placeholder=""
                      maxlength="30" readonly>
                    <input type="text" id="Desc_Turno" class="form-control" name="Desc_Turno" placeholder=""
                      maxlength="30" readonly>
                    <input type="text" id="id_cct" class="form-control" name="id_cct" placeholder="" maxlength="30"
                      readonly>
                    <input type="text" id="grupoAlumno" class="form-control" name="grupoAlumno" placeholder=""
                      maxlength="30" readonly>
                    <input type="text" id="gradoEscolar2" class="form-control" name="gradoEscolar2" placeholder=""
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
        </div>
      </div>
      {{-- <br><br> --}}
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
            <h4 class="card-title text-center"><b>PREMIOS</b></h4>
          </div>
        </div>

        <div class="col-3">
          <div class="card">
            <div class="card-content">
              <div class="card-body text-center">
                {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae aliquam quia non, perferendis reprehenderit quisquam eveniet eius nemo rem in corrupti ex et exercitationem ipsam mollitia voluptates quaerat doloribus pariatur!</p> --}}
                {{-- <div class="dashboard-content-right"> --}}
                {{-- <img src="{{asset('images/icon/cup.png') }}" height="220"
                width="220" class="logo"
                alt="Dashboard Ecommerce"/> --}}
                <img src="{{ asset('images/slider/bu2.jpg') }}" alt="Logo Tamaulipas" class="logo"
                  height="120" width="210">
                {{-- </div> --}}
              </div>
            </div>
          </div>
        </div>

        <div class="col-9">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non voluptatibus maiores asperiores omnis
                  voluptatum obcaecati numquam? Praesentium, quam explicabo, ut nihil vero totam rerum cumque alias
                  similique, distinctio minus ipsa.</P>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae atque distinctio sequi ad, amet
                  reiciendis! Atque mollitia iusto non odit a? Enim facilis voluptas dicta facere ratione molestias
                  sapiente beatae.</P>
              </div>
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
            <form action="#" class="form form-vertical" enctype="multipart/form-data">
              {{-- method="POST" @csrf --}}
              <div class="form-body">
                <div class="row">

                  <div class="col-6">
                    <div class="form-group">
                      <label for="nombrePregunta">Nombre</label>
                      <input type="text" id="nombrePregunta" class="form-control" name="nombrePregunta"
                        placeholder="Nombre completo" maxlength="18" required
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

</div>

{{-- <div class="header-con"> --}}
    {{-- <div class="row">
        <div class="col-12">
            <div class="col-3">
                <h2>Secretaría de Educación</h2>
                <p>Calzada General Luis Caballero s/n,<br>
                entre calle Ayacahuite y calle Álamo,<br>
                Cd. Victoria, Tamaulipas, México, C.P. 87078</p>
                <p>
                834 318 6600<br>834 318 6601<br>834 318 6602<br> </p>
            </div>
            <div class="col-3">
                <h2>Secretaría de Educación</h2>
                <div class="menu-secretaria-de-educacion-container">
                    <ul id="menu-secretaria-de-educacion" class="clean-list menu">
                        <li id="menu-item-584" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-584"><a
                            href="http://www.tamaulipas.gob.mx/educacion/conocenos/">Conócenos</a></li>
                        <li id="menu-item-21089"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21089"><a
                            href="https://www.tamaulipas.gob.mx/educacion/conocenos/">Código de Conducta</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-3" id="footer-links">
                <h2>Información por Perfiles</h2>
                <div class="menu-informacion-por-perfiles-container">
                <ul id="menu-informacion-por-perfiles" class="clean-list menu">
                    <li id="menu-item-590" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-590"><a
                        href="http://www.tamaulipas.gob.mx/educacion/perfiles/padres-de-familia/">Padres de Familia</a></li>
                    <li id="menu-item-589" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-589"><a
                        href="http://www.tamaulipas.gob.mx/educacion/perfiles/estudiantes/">Estudiantes</a></li>
                    <li id="menu-item-588" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-588"><a
                        href="http://www.tamaulipas.gob.mx/educacion/perfiles/escuelas/">Escuelas</a></li>
                    <li id="menu-item-587" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-587"><a
                        href="http://www.tamaulipas.gob.mx/educacion/perfiles/docentes/">Docentes</a></li>
                </ul>
                </div>
            </div>
            <div class="col-3">
                <h2>Sitios Recomendados</h2>
                <div class="menu-sitios-recomendados-container">
                <ul id="menu-sitios-recomendados" class="clean-list menu">
                    <li id="menu-item-41738"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41738"><a
                        href="http://www.tamaulipas.gob.mx/">Gobierno del Estado de Tamaulipas</a></li>
                    <li id="menu-item-41739"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41739"><a
                        href="http://www.diftamaulipas.gob.mx/">DIF Tamaulipas</a></li>
                    <li id="menu-item-41740"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41740"><a
                        href="http://www.gob.mx/sep">Secretaría de Educación Pública</a></li>
                </ul>
                </div>
            </div>
    
            <div class="col-12">
                <div id="liston-inferior">
                    Todos los derechos reservados © 2023 
                    <span id="to-break">/</span> 
                    Gobierno del Estado de Tamaulipas 2022 - 2028
                </div>
            </div>
        </div>
        </div> --}}
{{-- </div> --}}

{{-- <div class="header-con">
  <div class="row">
    <div id="footer-rows" class="row cols-same-height">
      <div class="col-3">
        <h2>Secretaría de Educación</h2>
        <p>Calzada General Luis Caballero s/n,<br>
          entre calle Ayacahuite y calle Álamo,<br>
          Cd. Victoria, Tamaulipas, México, C.P. 87078</p>
        <p>
          834 318 6600<br>834 318 6601<br>834 318 6602<br> </p>
      </div>
      <div id="footer-links" class="col-3>
        <div class="row">
          <div class="col-md-3 col-xs-6 mt10 mb10">
            <h2>Secretaría de Educación</h2>
            <div class="menu-secretaria-de-educacion-container">
              <ul id="menu-secretaria-de-educacion" class="clean-list menu">
                <li id="menu-item-584" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-584"><a
                    href="http://www.tamaulipas.gob.mx/educacion/conocenos/">Conócenos</a></li>
                <li id="menu-item-21089"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21089"><a
                    href="https://www.tamaulipas.gob.mx/educacion/conocenos/">Código de Conducta</a></li>
              </ul>
            </div>
          </div>
          <div class="col-3">
            <h2>Información por Perfiles</h2>
            <div class="menu-informacion-por-perfiles-container">
              <ul id="menu-informacion-por-perfiles" class="clean-list menu">
                <li id="menu-item-590" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-590"><a
                    href="http://www.tamaulipas.gob.mx/educacion/perfiles/padres-de-familia/">Padres de Familia</a></li>
                <li id="menu-item-589" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-589"><a
                    href="http://www.tamaulipas.gob.mx/educacion/perfiles/estudiantes/">Estudiantes</a></li>
                <li id="menu-item-588" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-588"><a
                    href="http://www.tamaulipas.gob.mx/educacion/perfiles/escuelas/">Escuelas</a></li>
                <li id="menu-item-587" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-587"><a
                    href="http://www.tamaulipas.gob.mx/educacion/perfiles/docentes/">Docentes</a></li>
              </ul>
            </div>
          </div>
          <div class="col-3">
            <h2>Sitios Recomendados</h2>
            <div class="menu-sitios-recomendados-container">
              <ul id="menu-sitios-recomendados" class="clean-list menu">
                <li id="menu-item-41738"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41738"><a
                    href="http://www.tamaulipas.gob.mx/">Gobierno del Estado de Tamaulipas</a></li>
                <li id="menu-item-41739"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41739"><a
                    href="http://www.diftamaulipas.gob.mx/">DIF Tamaulipas</a></li>
                <li id="menu-item-41740"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41740"><a
                    href="http://www.gob.mx/sep">Secretaría de Educación Pública</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-xs-6 mt10 mb10">
            <h2></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="info col-sm-12 visible-xs-block">
        <h2>Secretaría de Educación</h2>
        <p>Calzada General Luis Caballero s/n,<br>
          entre calle Ayacahuite y calle Álamo,<br>
          Cd. Victoria, Tamaulipas, México, C.P. 87078</p>
        <p>
          834 318 6600<br>834 318 6601<br>834 318 6602<br> </p>
      </div>
    </div>
  </div>
</div> --}}
<!-- Modal Events end -->
@endsection
{{-- page scripts --}}
@section('page-scripts')

<script src="{{ asset('js/scripts/modal/components-modal.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  var input1 = document.getElementById('telefono');

  input1.addEventListener('input', function () {
    if (this.value.length > 10)
      this.value = this.value.slice(0, 10);
  })

</script>

<script>

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
        return;
      }

    // console.log("ValidarImg");
  }

  function is_img(idinputfile) {
    var fileInput = document.getElementById(idinputfile);

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
        fileInput.value = '';
        return false;

      } else {

        var mostrarBoton = document.getElementById("verImagen");
        var mostrarMensaje = document.getElementById("archivoCargado");
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

</script>

<script>
  is_img('getFileDibujo'); //Ponemos el Id del input

</script>

@if(session('registro') === 'Ok')
  <script>
    Swal.fire(
      '¡Registrado correctamente!',
      'El alumno ha sido registrado',
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
    Swal.fire(
      '¡No se ha podido registrar!',
      'El alumno no ha sido registrado',
      'error'
    )

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

<script>
  $(document).ready(function () {

    var curpAlumno = $('#curp').val();

    if (curpAlumno == "") {
      console.log("esta vacio el input");
    } else {
      var mostrarBotonRegistrar = document.getElementById("registrar");
      mostrarBotonRegistrar.disabled = false;
    }

  })

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
          if (data == 1) {

            console.log("alumno existente");
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
                  var inp_nombre = document.getElementById("nombre");
                  var inp_apellido_p = document.getElementById("apellidoPaterno");
                  var inp_apellido_m = document.getElementById("apellidoMaterno");
                  var inp_escuela = document.getElementById("escuela");
                  var inp_grado_escolar = document.getElementById("gradoEscolar");
                  var inp_municipio = document.getElementById("municipio");

                  var inp_clave_cct = document.getElementById("clave_cct");
                  var inp_nombre_cct = document.getElementById("nombre_cct");
                  var inp_statusAlumno = document.getElementById("estatusAlumno");
                  var inp_AluSexo = document.getElementById("AluSexo");
                  var inp_Ciclo_Escolar = document.getElementById("Ciclo_Escolar");
                  var inp_Desc_Turno = document.getElementById("Desc_Turno");
                  var inp_id_cct = document.getElementById("id_cct");
                  var inp_grupo_escolar = document.getElementById("grupoAlumno");
                  var inp_gradoEscolar2 = document.getElementById("gradoEscolar2");

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
                var inp_nombre = document.getElementById("nombre");
                var inp_apellido_p = document.getElementById("apellidoPaterno");
                var inp_apellido_m = document.getElementById("apellidoMaterno");
                var inp_escuela = document.getElementById("escuela");
                var inp_grado_escolar = document.getElementById("gradoEscolar");
                var inp_municipio = document.getElementById("municipio");
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
