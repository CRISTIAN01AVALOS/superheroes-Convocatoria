@extends('layouts.contentIncludes2')
@section('title','Concurso de dibujo')

@section('content')
<div class="container-fluid py-4 mt-3">
    <div class="row">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Formulario</p>
                        <!-- <button class="btn btn-primary btn-sm ms-auto">Settings</button> -->
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-uppercase text-sm">User Information</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Username</label>
                                <input class="form-control" type="text" value="lucky.jesse">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Email address</label>
                                <input class="form-control" type="email" value="jesse@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">First name</label>
                                <input class="form-control" type="text" value="Jesse">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Last name</label>
                                <input class="form-control" type="text" value="Lucky">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Contact Information</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Address</label>
                                <input class="form-control" type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">City</label>
                                <input class="form-control" type="text" value="New York">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Country</label>
                                <input class="form-control" type="text" value="United States">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Postal code</label>
                                <input class="form-control" type="text" value="437300">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">About me</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">About me</label>
                            <input class="form-control" type="text" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
                            </div>
                        </div>
                    </div>
                    <div class="text-right col-md-12 ">
                        <button class="btn btn-danger mt-4">Cancelar</button>
                        <button class="btn btn-success mt-4">Guardar</button>
                    </div>
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