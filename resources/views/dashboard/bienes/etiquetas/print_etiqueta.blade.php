@extends('layouts.adminlte_print')

@section('title', 'CORSOAUTO| ETIQUETAS')

@section('content')

    <div class="row m-3">
        <div class="col-12 text-bold">
            Corporación Socialista del Sector Automotor, C.A. <br>
            Bienes Nacionales
        </div>
        <div class="row mt-3">
            <div class="col-6 text-center">
                <p>Consulta Local</p>
                <hr>
                {!! QrCode::size(150)->generate($texto); !!}
            </div>
            <div class="col-6 text-center">
                Consulta en Linea
                <hr>
                {!! QrCode::size(150)->generate($url); !!}
            </div>
        </div>
    </div>



@endsection

