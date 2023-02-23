@extends('layouts.fullLayoutMaster')
{{-- title --}}
{{--  header('Access-Control-Allow-Origin: *');  --}}
@section('title','Concurso de dibujo')

<style>
    .cint-header{
        background-color: #ab0033 !important;
    }
</style>

@section('content')
    <div class="header-con">
        {{-- <div class="card-header cint-header">
            <div class="brand-logo"> --}}
                <div class="row cint-header">
                    <div class="col-6 d-flex justify-content-first">
                        <img src="{{asset('images/logo/logoTamaulipas2022bb.png')}}" alt="Logo Tamaulipas" class="logo" height="70" width="190">
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
                    <div class="row">
                        <div class="col-12 d-flex justify-content-first">
                            <a class="btn btn-primary mr-1 mb-1 sm" href="{{ url()->previous() }}" role="button">Regresar</a>                        
                        </div>
                        
                        {{-- <div class="col-7 d-flex justify-content-first" style="padding-top: 12px;">
                            <h4>Bases del concurso</h4>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-1">
                    <div class="card-content">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="card-content">
                        <div class="card-body">

                            <h4 class="card-title text-center"> <b> BASES DEL CONCURSO </b> </h4>

                            <p class="card-text text-justify">
                            <b>1. </b> Podrán  participar  todos  los  niños  y  niñas  de  Nivel  Primaria  y  Centros  de  Atención  Múltiple 
                                residentes en Tamaulipas. <br>
                            </p>

                            <p class="card-text text-justify">
                                <b>2. </b> El  concurso  se  divide  por  regiones,  es  decir,  habrá  un(a)  ganador(a)  por  cada  una  de  las  seis 
                                regiones de Tamaulipas:
                                <ul>
                                    <li>Región  fronteriza  (Nuevo  Laredo,  Guerrero,  Mier,  Miguel  Alemán,  Camargo,  Gustavo  Díaz 
                                        Ordaz, Reynosa, Río Bravo, Valle Hermoso y Matamoros). </li>
                                    <li>Región Valle de San Fernando (Méndez, Burgos, Cruillas y San Fernando).</li>
                                    <li>Región Centro (Abasolo, Güémez, Hidalgo, Jiménez, Mainero, Padilla, San Carlos, San Nicolás, 
                                        Soto la Marina, Victoria, Villa de Casas y Villagrán).</li>
                                    <li>Región Sur (González, Aldama, Altamira, Tampico y Madero).</li>
                                    <li>Región  El  Mante  (Nuevo  Morelos,  Antiguo  Morelos,  Mante,  Xicoténcatl,  Ocampo,  Llera  y 
                                        Gómez Farías).</li>
                                    <li>Región Altiplano (Jaumave, Miquihuana, Palmillas, Bustamante y Tula).</li>
                                </ul>
                            </p>

                            <p class="card-text text-justify">
                                <b>3. </b> Aspectos a evaluar de la obra:
                                <ul>
                                    <li>Técnica.</li>
                                    <li>Representación de la región.</li>
                                    <li>Descripción breve del personaje.</li>
                                    <li>Que incluya al menos un valor de la Nueva Escuela Mexicana (un párrafo).</li>
                                    <li>Originalidad.</li>
                                </ul>
                            </p>

                            <p class="card-text text-justify">
                                <b>4. </b>Cada participante podrá inscribir un solo dibujo, de autoría propia e inédito, el cual no debe haber 
                                participado en otros certámenes.
                            </p>

                            <p class="card-text text-justify">
                                <b>5. </b>La fecha de recepción de los trabajos será <b>hasta el lunes 20 de marzo del 2023</b>. Participarán 
                                en el concurso aquellos dibujos que  hayan sido recibidos o tengan una fecha de envío que  no 
                                exceda el límite del día de recepción. No se tomarán en cuenta los dibujos que no se sujeten a las 
                                bases del concurso.
                            </p>

                            <p class="card-text text-justify">
                                <b>6. </b>El dibujo debe ser elaborado en hoja de máquina, tamaño carta.
                            </p>

                            <p class="card-text text-justify">
                                <b>7. </b>La ilustración debe estar hecha a mano y en técnica libre. Se puede utilizar lápiz, grafito, carbón, 
                                pasteles, lápices de colores, técnicas a blanco y negro, crayones, u otros materiales.
                            </p>

                            <p class="card-text text-justify">
                                <b>8. </b>Serán rechazados los dibujos que hagan uso de personajes o imágenes de la televisión, del cine, 
                                historietas,  revistas,  logotipos,  marcas,  emblemas  comerciales  o  políticos.  No  se  aceptarán 
                                elementos bélicos en el dibujo.
                            </p>

                            <p class="card-text text-justify">
                                <b>9. </b>El  dibujo  deberá  ser  digitalizado  a  través  de  una  fotografía  o  escaneo  (alta  calidad  y  bien 
                                iluminada) y enviado como archivo adjunto. Consulta la página web:
                                <a href="https://proyectoscete.tamaulipas.gob.mx/concursodedibujo/">https://proyectoscete.tamaulipas.gob.mx/concursodedibujo/</a>
                            </p>

                            <p class="card-text text-justify">
                                <b>10. </b>En el cuerpo del dibujo se deberá precisar la siguiente información:
                                <ul>
                                    <li>Nombre de autor(a).</li>
                                    <li>Nombre del personaje.</li>
                                    <li>Valores de la Nueva Escuela Mexicana que promueve.</li>
                                    <li>Descripción breve del personaje.</li>
                                </ul>
                            </p>

                            <p class="card-text text-justify">
                                <b>11. </b>Los y las participantes deberán conservar en buen estado su dibujo, ya que, en caso de ganar, se 
                                solicitará el documento original. 
                            </p>

                            <p class="card-text text-justify">
                                <b>12. </b>Por cada una de las seis regiones, se elegirá un dibujo ganador. Cada niño y niña que gane, se le 
                                otorgará reconocimiento.
                            </p>

                            <p class="card-text text-justify">
                                <b>13. </b>Los y las concursantes no podrán ser familiares del Comité Organizador o de los y las integrantes 
                                del jurado.
                            </p>

                            <p class="card-text text-justify">
                                <b>14. </b>Todos los trabajos serán propiedad del Gobierno de Tamaulipas y la Secretaría de Educación de 
                                Tamaulipas y consecuentemente propietarias de los derechos de autor. Estas instituciones serán 
                                propietarias  de  los  derechos  de  autor  y  en  caso  de  publicar  los  trabajos,  se  reconocerán  a  sus 
                                autores y se darán los créditos de la obra.
                            </p>

                            <p class="card-text text-justify">
                                <b>15. </b>Todos los participantes del presente concurso reconocen y aceptan los términos asentados en 
                                esta Convocatoria.
                                <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead class="thead-dark">
                                         <tr>
                                            <th>ACTIVIDAD</th>
                                            <th>FECHA</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                        <tr>
                                        <td>Fecha límite de recepción de dibujos</td>
                                        <td>20 de marzo de 2023</td>
                                        </tr>
                                        <tr>
                                            <td>Publicación de ganadores</td>
                                            <td>28 de abril de 2023</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </p>

                            <p class="card-text text-justify">
                                <b>JURADO CALIFICADOR</b> <br>
                                El jurado calificador estará integrado por representantes de las siguientes instituciones:
                                <ul>
                                    <li>Secretaría de Educación de Tamaulipas.</li>
                                    <li>Sistema Nacional del Desarrollo Integral de la Familia (DIF), Tamaulipas.</li>
                                    <li>Instituto Nacional de la Juventud (INJUVE), Tamaulipas.</li>
                                    <li>Sistema de Protección Integral de Niñas, Niños y Adolescentes (SIPINNA), Tamaulipas.</li>
                                </ul>
                                <b>El fallo del jurado será inapelable.</b> Cualquier situación no prevista en la presente Convocatoria será resuelta por el jurado
                            </p>

                            <p class="card-text text-justify">
                                <b>Para dudas o aclaraciones puede escribir al correo:</b> <br>
                                consultadibujaunsuperheroe@set.edu.mx
                            </p>             
                            <br>
                            <p class="card-text text-justify">
                               <b>Convocatoria - Concurso de Dibujo</b> <a href="{{asset('images/convocatoria/ConvocatoriaSuperhéroes.pdf')}}" download="Convocatoria - Concurso de Dibujo">(Descargar)</a>
                            </p>
                            
                            {{-- <iframe src="{{asset('images/convocatoria/ConvocatoriaSuperhéroes.pdf')}}" frameborder="0"></iframe> --}}
                            {{-- <iframe type="application/pdf" class="col-12" height='1000' src="{{asset('images/convocatoria/ConvocatoriaSuperhéroes.pdf')}}" frameborder="0" allowfullscreen webkitallowfullscreen></iframe> --}}
                            {{-- <object data="{{asset('images/convocatoria/ConvocatoriaSuperhéroes.pdf')}}"
                            width="800"
                            height="800"
                            type="text/html">
                            </object> --}}

                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="card-content">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
{{-- page scripts --}}
@section('page-scripts')

    <script src="{{asset('js/scripts/modal/components-modal.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection