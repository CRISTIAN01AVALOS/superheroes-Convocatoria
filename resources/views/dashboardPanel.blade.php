{{--@extends('layouts.contentIncludes')--}}

{{--@section('title','Concurso de dibujo')--}}

@section('content')
    <table id="tableListado" class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>CURP</th>
                <th>Centro de Trabajo</th>
                <th>Estatus</th>
                <th>Estatus</th>
            </tr>
        </thead>
        <tbody id="tbListado">
            @if($registros->count() >= 2)
                @foreach($registros as $registro)
                    <tr >
                        <th> {{ $registro->id_registro_concurso }} </th>
                        <th> {{ $registro->nombre_alumno }} </th>
                        <th> {{ $registro->ap_paterno }} </th>
                        <th> {{ $registro->ap_materno }} </th>
                        <th> {{ $registro->curp }} </th>
                        <th> {{ $registro->cct . ' - ' . $registro->nombre_cct  }} </th>
                        <th class="align-middle text-center text-sm"> @if ($registro->estatus_id==1) <span class="badge badge-sm bg-success">Registrado</span> 
                            @elseif ($registro->estatus_id==2) <span class="badge badge-sm bg-success">Seleccionado</span>
                            @elseif ($registro->estatus_id==3) <span class="badge badge-sm bg-secondary">No Seleccionado</span>
                            @endif
                        </th>
                    </tr>
                @endforeach
            @elseif( $registros->count()==1)
                <tr >
                    <th> {{ $registros->id_registro_concurso }} </th>
                    <th> {{ $registros->curp }} </th>
                    <th> @if ($registros->estatus_id==1) <span class="reg">Registrado</span> 
                            @elseif ($registros->estatus_id==2) <span class="select">Seleccionado</span>
                            @elseif ($registros->estatus_id==3) <span class="noselect">No Seleccionado</span>
                            @endif
                     </th>
                </tr>
            @else
                <tr >
                    <th colspan="2"> No existen registros </th>
                </tr>
            @endif
        </tbody>
    </table>
@endsection