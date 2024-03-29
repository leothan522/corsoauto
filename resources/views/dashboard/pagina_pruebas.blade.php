@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pagina Pruebas</h1>
@endsection

@section('content')
    {{--<p>Welcome to this beautiful admin panel.</p>--}}
    @include('dashboard._layout.content')
@endsection

@section('right-sidebar')
    @include('dashboard._componentes.right-sidebar')
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

        function search(){
            let input = $("#navbarSearch");
            let keyword  = input.val();
            if (keyword.length > 0){
                input.blur();
                alert('Falta vincular con el componente Livewire');
                //Livewire.emit('increment', keyword);
            }
            return false;
        }

        console.log('Hi!');
    </script>
@endsection
