@extends('layouts.contentIncludes2')
@section('title','Concurso de dibujo') 

@section('content')
<div class="container-fluid py-4 mt-3">
    <div class="row mt-4">
        <div class="d-flex justify-content-between ">
            <h1 class="mb-2 colorTitle">Evaluación </h1>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">Evaluacion del Dibujo </h6>
                    </div>
                </div>
                <!-- descomentar en caso de que falle el responsive -->
                <!-- <div class="table-responsive"> -->
                <!-- comentar en caso de que falle el responsive -->
                <div class="">
                    <table class="table align-items-center mb-0" id="tablaListado">
                        <thead>
                        <tr>
                            <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Juez</th>
                            <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Técnica</th>
                            <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Representación de la Región</th>
                            <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripción del Personaje</th>
                            <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Originalidad</th>
                            <th class="align-middle text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($evaluacion->count() >= 1)
                            @php
                            $totalSuma=0;
                            @endphp
                                @foreach($evaluacion as $eval)
                                    <tr >
                                        <!-- <td class="align-middle text-center text-sm"> {{ $eval->id_evaluacion_concurso }} </td> -->
                                        <td class="align-middle text-center mb-0 text-sm"> {{ $eval->name }} </td>
                                        <td class="align-middle text-center mb-0 text-sm"> {{ $eval->tecnica }} </td>
                                        <td class="align-middle text-center mb-0 text-sm"> {{ $eval->repre_region }} </td>
                                        <td class="align-middle text-center mb-0 text-sm"> {{ $eval->desc_personaje }} </td>
                                        <td class="align-middle text-center mb-0 text-sm"> {{ $eval->originalidad }} </td>
                                        <td class="align-middle text-center mb-0 text-sm"> {{ $eval->total   }} </td>
                                        
                                    </tr>
                                    @php
                                    $totalSuma=$totalSuma+  $eval->total  ;
                                    @endphp
                                    
                                @endforeach

                                @can('ver-administrar')
                                    <tr >
                                        <td >  </td>
                                        <td>  </td>
                                        <td >  </td>
                                        <td >  </td>
                                        <td  class="align-middle text-center mb-0 text-sm"> Total </td>
                                        <td class="align-middle text-center mb-0 text-sm"> @php echo $totalSuma; @endphp </td>
                                    </tr>
                                @endcan

                            @else
                                <tr >
                                    <th colspan="6" class="align-middle text-center"> No existen registros </th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <br >
                <div class="text-end col-md-12 pb-0 p-3"> 
                    <a class="btn btn-secondary" href="{{ route('panelAdmin') }}">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-scripts')
<script src="{{ asset('js/scripts/modal/components-modal.js') }}"></script>
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

<!-- <script src="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css"></script>
<script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script> -->
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script>
   
</script>
@endsection