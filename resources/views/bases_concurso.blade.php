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
                        <div class="col-5 d-flex justify-content-first">
                            <a class="btn btn-primary mr-1 mb-1 sm" href="{{ url()->previous() }}" role="button">Regresar</a>                        
                        </div>
                        
                        <div class="col-7 d-flex justify-content-first" style="padding-top: 12px;">
                            <h4>Bases del concurso</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card-content">
                    <div class="card-body">

                        {{-- <iframe src="{{asset('images/convocatoria/ConvocatoriaSuperhéroes.pdf')}}" frameborder="0"></iframe> --}}
                        <iframe class="col-12" height="1000" src="{{asset('images/convocatoria/ConvocatoriaSuperhéroes.pdf')}}" frameborder="0"></iframe>

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