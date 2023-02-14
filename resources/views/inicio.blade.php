@extends('layouts.fullLayoutMaster')
{{-- title --}}
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

    .cint-header{
        background-color: #ab0033 !important;
    }

</style>

@section('content')
    <div class="header-con">
        <div class="card-header cint-header">
            <div class="brand-logo">
                <img src="{{asset('images/logo/logoTamaulipas2022bb.png')}}" alt="Logo Tamaulipas" class="logo" height="70" width="190">
                {{-- <h3 class="card-title text-center" style="color: white;">CONCURSO DE DIBUJO</h3> --}}
            </div>
        </div>
    </div>
    <br>

    <div class="col-12">
        <div class="card" id="carousel-caption">
            
            <div class="card-content">
            <div class="card-body">
                <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    {{-- <li data-target="#carousel-example-caption" data-slide-to="0" class="active"></li> --}}
                    <a href="#registro-con"><li class="active" style="background-color:#ab0033;"></li></a>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                    {{-- <img class="img-fluid" src="{{asset('images/slider/BANNER-DE-BIENVENIDA.png')}}" alt="First slide"> --}}
                    <img class="img-fluid" src="{{asset('images/slider/banner_plataforma.jpg')}}" alt="First slide">

                    {{-- <div class="card-img-overlay bg-overlay">
                        <div class="carousel-caption d-none d-sm-block">
                        <h3>CONVOCATORIA</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere minima, 
                            perspiciatis tempore soluta similique consequatur, necessitatibus
                                blanditiis exercitationem commodi numquam cumque! Dolorem voluptatum 
                                labore possimus maiores, iusto culpa laboriosam mollitia.
                        </p>
                        </div>
                    </div> --}}
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="col-12" id="registro-con">
        <div class="card">
            <div class="card-content">

            <div class="card-header">
                <h4 class="card-title text-center"><b>FORMULARIO DE REGISTRO</b></h4>
            </div>

            <div class="card-body">
                <form action="#" class="form form-vertical">
                    {{-- @csrf --}}
                    <div class="form-body">
                        <div class="row">
                            
                        <div class="col-6">
                            <div class="form-group">
                                <label for="curp">Curp</label>
                                {{-- value="AAAC980109HTSVGR00" --}}
                                <input type="text" id="curp" class="form-control" name="curp" 
                                placeholder="Curp del alumno" maxlength="18" >
                                {{-- value="{{ old('curp') }}" --}}
                                {!! $errors->first('curp', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <br>
                                {{-- <label for="curp">Curp</label> --}}
                                <button type="button" title="Filtrar por rango de fechas" class="btn btn-primary">Buscar</button>
                            </div>
                        </div>
                            

                        <div class="col-6">
                            <div class="form-group">
                            <label for="nombre">Nombre</label>
                            {{-- value="{{ old('nombre') }}" value="Cristian Ramiro" --}}
                            <input type="text" id="nombre" class="form-control" name="nombre"
                                placeholder="" maxlength="90" readonly>
                                {!! $errors->first('nombre', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="apellidoPaterno">Apellido paterno</label>
                                {{-- value="{{ old('apellidoPaterno') }}" value="Avalos"--}}
                                <input type="text" id="apellidoPaterno" class="form-control" name="apellidoPaterno" 
                                placeholder="" maxlength="30" readonly >
                                {!! $errors->first('apellidoPaterno', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="apellidoMaterno">Apellido materno</label>
                                {{-- value="{{ old('apellidoMaterno') }}" value="Aguilar"--}}
                                <input type="text" id="apellidoMaterno" class="form-control" name="apellidoMaterno" 
                                placeholder="" maxlength="90" readonly >
                                {!! $errors->first('apellidoMaterno', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="escuela">Escuela</label>
                                {{-- value="{{ old('escuela') }}" value="Escuela Naciones Unidas"--}}
                                <input type="text" id="escuela" class="form-control" name="escuela" 
                                placeholder="" maxlength="90" readonly >
                                {!! $errors->first('escuela', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="gradoEscolar">Grado escolar</label>
                                {{-- value="{{ old('gradoEscolar') }}" value="6° grado"--}}
                                <input type="text" id="gradoEscolar" class="form-control" name="gradoEscolar"
                                placeholder="" maxlength="30" readonly > 
                                {!! $errors->first('gradoEscolar', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="municipio">Municipio</label>
                                {{-- value="{{ old('municipio') }}" value="Victoria"--}}
                                <input type="text" id="municipio" class="form-control" name="municipio"
                                placeholder="" maxlength="90" readonly >
                                {!! $errors->first('municipio', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="telefono">Teléfono </label>
                                <input type="text" id="telefono" class="form-control" name="telefono" value="{{ old('telefono') }}"
                                placeholder="Teléfono del papá, mamá o persona adulta que considere" maxlength="30">
                                {!! $errors->first('telefono', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input type="text" id="direccion" class="form-control" name="direccion" value="{{ old('direccion') }}"
                                placeholder="Dirección de casa" maxlength="120">
                                {!! $errors->first('direccion', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="correo">Correo electrónico</label>
                                <input type="email" id="correo" class="form-control" name="correo" value="{{ old('correo') }}"
                                placeholder="Correo electrónico del papá, mamá o persona adulta que considere" maxlength="30">
                                {!! $errors->first('correo', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        
                        <hr style="border: 1px solid #727e8c60" class="col-11">

                        <div class="col-6">
                            <div class="form-group">
                                <label for="nombrePersonaje">Nombre del personaje</label>
                                <input type="text" id="nombrePersonaje" class="form-control" name="nombrePersonaje" value="{{ old('nombrePersonaje') }}"
                                placeholder="Nombre del personaje" maxlength="30">
                                {!! $errors->first('nombrePersonaje', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="valoresPersonaje">Valores del superhéroe o superheroína</label>
                                <input type="text" id="valoresPersonaje" class="form-control" name="valoresPersonaje" value="{{ old('valoresPersonaje') }}"
                                placeholder="Valores del personaje" maxlength="90">
                                {!! $errors->first('valoresPersonaje', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="descripcionPersonaje">Breve descripción del personaje</label>
                                <input type="text" id="descripcionPersonaje" class="form-control" name="descripcionPersonaje" value="{{ old('descripcionPersonaje') }}"
                                placeholder="Breve descripcion del personaje" maxlength="120">
                                {!! $errors->first('descripcionPersonaje', '<small class="form-text text-danger">:message</small> ') !!}
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Archivo</label>
                                <label for="getFileContrato" class="btn btn-primary btn-block glow my-2 add-file-btn text-capitalize"><i class="bx bx-plus"></i>Agregar archivo</label>
                                <input type="file" class="d-none @error('getFileContrato') is-invalid @enderror" id="getFileContrato" name="getFileContrato" value="">
                                <span style="color: #ab0033; display: none;" id="archivoCargado">Archivo cargado</span>
                                <button id="verImagen" style="display: none;" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalScrollable">Ver imagen</button>
                            </div>
                        </div>

                        {{-- <div class="row"> --}}
                            {{-- <div class="col-12">
                            <iframe class="col-12" height="1000" src="{{asset('images/dibujos-alumnos/goku.jpg')}}" frameborder="0"></iframe>
                            </div> --}}
                        {{-- </div> --}}
                        
            
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary mr-1 mb-1">Guardar</button>
                            {{-- <a class="btn btn-light-secondary mr-1 mb-1" href="{{ url()->previous() }}" role="button">Cancelar</a> --}}
                        </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <br><br>
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
                                    
                                {{-- <img width="400" src="{{asset('images/dibujos-alumnos/spider1.jpg')}}"> src="{{asset('images/dibujos-alumnos/goku.jpg')}}"--}}
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


<!-- Modal Events end -->
@endsection
{{-- page scripts --}}
@section('page-scripts')

    <script src="{{asset('js/scripts/modal/components-modal.js')}}"></script>

    <script>
        var input1 =  document.getElementById('telefono');

        input1.addEventListener('input',function(){
        if (this.value.length > 10) 
            this.value = this.value.slice(0,10); 
        })
    </script> 

    <script>
        var mostrarBoton = document.getElementById("verImagen");
        var mostrarMensaje = document.getElementById("archivoCargado");
        const $seleccionArchivos = document.querySelector("#getFileContrato"),
        $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

        $seleccionArchivos.addEventListener("change", () => {
        const archivos = $seleccionArchivos.files;
            if (!archivos || !archivos.length) {
                $imagenPrevisualizacion.src = "";
                return;
            }

            mostrarBoton.style.display = "inline";
            mostrarMensaje.style.display = "inline";
            const primerArchivo = archivos[0];
            const objectURL = URL.createObjectURL(primerArchivo);
            $imagenPrevisualizacion.src = objectURL;

        });
    </script>

@endsection