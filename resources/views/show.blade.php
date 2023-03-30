@extends('layouts.contentIncludes2')
@section('title','Concurso de dibujo') 

@section('content')
<div class="container-fluid py-4 mt-3">
      <div class="row mt-4">
<div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card ">
        <div class="card-header pb-0 p-3">
            <div class="d-flex justify-content-between">
                <h6 class="mb-2">Registros {{ auth()->user()->name }}</h6>
            </div>
        </div>
        <!-- descomentar en caso de que falle el responsive -->
        <div class="table-responsive">
        <!-- comentar en caso de que falle el responsive -->
        <!-- <div class=""> -->
            <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apellido Paterno</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apellido Materno</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CURP</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Centro de Trabajo</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estatus</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                    @if($registros->count() >= 2)
                        @foreach($registros as $registro)
                            <tr >
                                <td class="align-middle text-center text-sm"> {{ $registro->id_registro_concurso }} </td>
                                <td class="mb-0 text-sm"> {{ $registro->nombre_alumno }} </td><!--class="text-xs text-secondary mb-0"-->
                                <td class="mb-0 text-sm"> {{ $registro->ap_paterno }} </td>
                                <td class="mb-0 text-sm"> {{ $registro->ap_materno }} </td>
                                <td class="mb-0 text-sm"> {{ $registro->curp }} </td>
                                <td class="mb-0 text-sm"> {{ $registro->cct . ' - ' . $registro->nombre_cct  }} </td>
                                <td class="align-middle text-center text-sm"> @if ($registro->estatus_id==1) <span class="badge badge-sm bg-success">Registrado</span> 
                                  @elseif ($registro->estatus_id==2) <span class="badge badge-sm bg-success">Seleccionado</span>
                                  @elseif ($registro->estatus_id==3) <span class="badge badge-sm bg-secondary">No Seleccionado</span>
                                  @endif
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                        <button class="btn btn-link text-secondary mb-0 "
                                            data-bs-toggle="dropdown" id="opciones"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="opciones1">
                                            <li>
                                                <a  v-if="can('btn_update_registro') && screen != null" 
                                                    v-on:click="editar(option)" class="dropdown-item" href="#">
                                                    <i class="fas fa-eye"></i> Visualizar
                                                </a>
                                            </li>
                                            <li>
                                                <a v-on:click="descargarPdf(option)"  class="dropdown-item" href="#">
                                                    <i class="fas fa-download"></i> Revisar Dibujo
                                                </a>
                                            </li>
                                            <li>
                                                <a  v-if="can('btn_update_registro') && screen == null" 
                                                    v-on:click="editar(option)" class="dropdown-item" href="#">
                                                    <i class="fas fa-edit"></i> Evaluar Dibujo
                                                </a>
                                            </li>
                                            
                                            <li>
                                            <a  v-if="can('btn_update_registro') && screen != null" 
                                                    v-on:click="editar(option)" class="dropdown-item" href="#">
                                                    <i class="fas fa-eye"></i> Evaluacion de Dibujo
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                                <!-- <td class="align-middle">
                                    <div class="dropdown">
                                        <button class="btn btn-link text-secondary mb-0 "
                                            data-bs-toggle="dropdown" id="opciones"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="opciones1">
                                            <li>
                                                <a  v-if="can('btn_update_registro') && screen != null" 
                                                    v-on:click="editar(option)" class="dropdown-item" href="#">
                                                    <i class="fas fa-eye"></i> Ver
                                                </a>
                                            </li>
                                            <li>
                                                <a  v-if="can('btn_update_registro') && screen == null" 
                                                    v-on:click="editar(option)" class="dropdown-item" href="#">
                                                    <i class="fas fa-edit"></i> Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a v-on:click="descargarPdf(option)"  class="dropdown-item" href="#">
                                                    <i class="fas fa-download"></i> Descargar PDF
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a v-if="option.deleted_at === null && (can('btn_delete_registro') || can('btn_delete_emergencia'))"
                                                    v-on:click="metodoGenerico(option, 'registro.delete', 'Registro borrado')" class="dropdown-item">
                                                    <i class="fas fa-trash"></i> Borrar
                                                </a>
                                            </li>
                                            <li>
                                                <a v-if="option.deleted_at !== null" v-on:click="metodoGenerico(option, 'registro.restore', 'Registro restaurado')" class="dropdown-item">
                                                    <i class="fa fa-recycle" aria-hidden="true"></i> Restaurar
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td> -->
                            </tr>
                        @endforeach
                    @elseif( $registros->count()==1)
                        <tr >
                            <td class="align-middle text-center text-sm"> {{ $registros->id_registro_concurso }} </td>
                            <td class="mb-0 text-sm"> {{ $registros->nombre_alumno }} </td><!--class="text-xs text-secondary mb-0"-->
                            <td class="mb-0 text-sm"> {{ $registros->ap_paterno }} </td>
                            <td class="mb-0 text-sm"> {{ $registros->ap_materno }} </td>
                            <td class="mb-0 text-sm"> {{ $registros->curp }} </td>
                            <td class="mb-0 text-sm"> {{ $registros->cct . ' - ' . $registros->nombre_cct  }} </td>
                            <td class="align-middle text-center text-sm"> @if ($registros->estatus_id==1) <span class="badge badge-sm bg-success">Registrado</span> 
                                @elseif ($registros->estatus_id==2) <span class="badge badge-sm bg-success">Seleccionado</span>
                                @elseif ($registros->estatus_id==3) <span class="badge badge-sm bg-secondary">No Seleccionado</span>
                                @endif
                            </td>
                            <td class="align-middle">
                                <div class="dropdown">
                                    <button class="btn btn-link text-secondary mb-0 "
                                        data-bs-toggle="dropdown" id="opciones"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                        <i class="fa fa-ellipsis-v text-xs"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="opciones1">
                                        <li>
                                            <a  v-if="can('btn_update_registro') && screen != null" 
                                                v-on:click="editar(option)" class="dropdown-item" href="#">
                                                <i class="fas fa-eye"></i> Ver
                                            </a>
                                        </li>
                                        <li>
                                            <a  v-if="can('btn_update_registro') && screen == null" 
                                                v-on:click="editar(option)" class="dropdown-item" href="#">
                                                <i class="fas fa-edit"></i> Editar
                                            </a>
                                        </li>
                                        <li>
                                            <a v-on:click="descargarPdf(option)"  class="dropdown-item" href="#">
                                                <i class="fas fa-download"></i> Descargar PDF
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a v-if="option.deleted_at === null && (can('btn_delete_registro') || can('btn_delete_emergencia'))"
                                                v-on:click="metodoGenerico(option, 'registro.delete', 'Registro borrado')" class="dropdown-item">
                                                <i class="fas fa-trash"></i> Borrar
                                            </a>
                                        </li>
                                        <li>
                                            <a v-if="option.deleted_at !== null" v-on:click="metodoGenerico(option, 'registro.restore', 'Registro restaurado')" class="dropdown-item">
                                                <i class="fa fa-recycle" aria-hidden="true"></i> Restaurar
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @else
                        <tr >
                            <th colspan="2"> No existen registros </th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
@endsection

@section('page-scripts')
<script src="{{ asset('js/scripts/modal/components-modal.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- <script src="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css"></script>
<script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script> -->
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

<script>
    /*var tabla;

    $(document).ready(function () {
        fnLoad();
       $('#tablaListado').DataTable();
    });

     function fnLoad(data){ //Carga datos en dataTable
        $.ajax({
            method: "get",
            url: "show",
            //data: { accion: 5 },
            dataType:"json",
            processData: false,
            contentType:false,
            beforeSend: function() {
            },
            success:function( data ) {
                console.log(registros2);
                //alert(data);
                if(data.status=="Ok"){
                    //console.log(data.resultado);
                    tablaListado(data.resultado);
                }else{
                    //mjseNotif("Advertencia", "No se econtraron registros", "warning");
                }
                //var data = JSON.parse(data.resultado);
                //tablaListado(data);
            },
            error:function( data ) {
                //alert('jjola'+data);
                //mjseNotif("Error", "No se pueden cargar los datos2", "negative");
            },
        });
    } 

     function tablaListado(daata){
        if(tabla){
            $('#tablaListado2').DataTable().clear().destroy();
        }
        tabla=$('#tablaListado2').DataTable({
            data: daata.data,
            initComplete: function(){
                $('#tablaListado2').show();
            },
            columns: [
                { data: 'id_registro_concurso' },
                { data: 'curp' },
                 { data: null, render:function(data){
                        return '<i class="eye blue icon" onClick="fnAccion('+data.id+',1)"></i>'+ //Ver
                        '&nbsp;&nbsp; <i class="pencil green icon" onClick="fnAccion('+data.id+',2)"></i>'+ //Editar
                        '&nbsp;&nbsp; <i class="trash red icon" onClick="fnEliminar('+data.id_registro_concurso+',3)"></i>'; //Eliminar
                    }
                }, 
            ],
            columnDefs:[
                {
                    targets: [0,1,2,3,4,5,6,7],
                    //className: 'text-center',
                    //sortable: false
                },{
                    //targets: [6], //oculta campo activo
                    visible: false,
                    //searchable: false
            }],
            language: {
                search: "Buscar",
                lengthMenu: "Mostrando _MENU_ registros",
                zeroRecords: "No se encuentran registros",
                info: "Mostrando _PAGE_ de _PAGES_",
                infoEmpty: "No se encuentran registros",
                infoFiltered: "(filtrado desde _MAX_ total de registros)",
                paginate: {
                    first: "Primero",
                    last: "Último",
                    next: "Siguiente",
                    previous: "Anterior"
                },
            }
        });
    }
 */
</script>
@endsection