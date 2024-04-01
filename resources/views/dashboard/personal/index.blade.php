@extends('adminlte::page')

@section('plugins.Select2', true)

@section('title', 'Dashboard')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="fas fa-users"></i> Personal</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                    <li class="breadcrumb-iktem active">Trabajadores Registrados</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{--<p>Welcome to this beautiful admin panel.</p>--}}
    <div>
        @livewire('dashboard.responsables-component')
    </div>
    <div class="row">
        @livewire('dashboard.cargos-component')
    </div>
@endsection

@section('right-sidebar')
    @include('dashboard.personal.right-sidebar')
@endsection

@section('footer')
    @include('dashboard.footer')
@endsection

@section('css')
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    <script src="{{ asset("js/app.js") }}"></script>
    <script>

        function verCargos() {
            Livewire.dispatch('limpiarCargos');
        }

        function verSpinnerOculto() {
            $('.cargar_buscar').removeClass('d-none');
        }

        function select_2(id, data, event)
        {
            let html = '<div class="input-group-prepend">' +
                '<span class="input-group-text">' +
                '<i class="far fa-bookmark"></i>' +
                '</span>' +
                '</div> ' +
                '<select id="'+ id +'"></select>';
            $('#div_' + id).html(html);

            $('#'  + id).select2({
                theme: 'bootstrap4',
                data: data,
                placeholder: 'Seleccione',
            });
            $('#'  + id).val(null).trigger('change');
            $('#'  + id).on('change', function() {
                var val = $(this).val();
                Livewire.dispatch(event, { id: val });
            });
        }

        Livewire.on('selectSedes', ({ data }) => {
            select_2('select_personal_sede', data, 'getselectSedes');
        });

        Livewire.on('setSelectSedes', ({ id }) => {
            $('#select_personal_sede').val(id).trigger('change');
        });

        Livewire.on('selectCargos', ({ data }) => {
            select_2('select_personal_cargo', data, 'getselectCargos');
        });

        Livewire.on('setSelectCargos', ({ id }) => {
            $('#select_personal_cargo').val(id).trigger('change');
        });

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
