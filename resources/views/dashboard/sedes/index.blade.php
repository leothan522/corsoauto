@extends('adminlte::page')

@section('plugins.Select2', true)

@section('title', 'Dashboard')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fas fa-home"></i> Sedes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                    <li class="breadcrumb-item active">Sedes Registradas</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{--<p>Welcome to this beautiful admin panel.</p>--}}
    <div>
        @livewire('dashboard.sedes-component')
    </div>

@endsection

@section('right-sidebar')
    @include('dashboard.right-sidebar')
@endsection

@section('footer')
    @include('dashboard.footer')
@endsection

@section('css')
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    <script src="{{ asset("js/app.js") }}"></script>
    <script src="{{ asset("js/territorio.js") }}"></script>
    <script>

        Livewire.on('editTerritorio', ({ estado, municipio, parroquia, ciudad }) => {
            setTimeout(function () {
                $('#select_territorio_estado').val(estado).trigger('change');
            }, 1000);
            setTimeout(function () {
                $('#select_territorio_municipio').val(municipio).trigger('change');
            }, 2000);
            setTimeout(function () {
                $('#select_territorio_ciudades').val(ciudad).trigger('change');
            }, 2000);
            setTimeout(function () {
                $('#select_territorio_parroquia').val(parroquia).trigger('change');
                Livewire.dispatch('resetCargando');
            }, 3500);
        });

        function verSpinnerOculto() {
            $('.cargar_buscar').removeClass('d-none');
        }

        function buscar(){
            let input = $("#navbarSearch");
            let keyword  = input.val();
            if (keyword.length > 0){
                input.blur();
                //alert('Falta vincular con el componente Livewire');
                verSpinnerOculto();
                Livewire.dispatch('buscar', { keyword: keyword });
            }
            return false;
        }

        console.log('Hi!');
    </script>
@endsection
