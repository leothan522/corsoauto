<div class="p-3">
    <ul class="nav nav-pills flex-column">
        {{--@livewire('dashboard.dolar-component')
        <li class="dropdown-divider"></li>--}}
        <li class="nav-item mb-2">
            <span class="text-small text-muted float-right">Tablas</span>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-primary btn-sm btn-block m-1"
                    data-toggle="modal" data-target="#modal-personal-cargos" onclick="verCargos()"
                    {{--@if(!comprobarPermisos('tipos_ajuste.index')) disabled @endif--}} >
                Gestión de Cargos
            </button>
        </li>
        {{--<li class="nav-item">
            <button type="button" class="btn btn-primary btn-sm btn-block m-1"
                    data-toggle="modal" data-target="#modal-almacenes" onclick="verAlmacenes()"
                    --}}{{--@if(!comprobarPermisos('almacenes.index')) disabled @endif--}}{{-- >
                Ejemplo Tipos 2
            </button>
        </li>--}}
        {{--<li class="dropdown-divider"></li>
        <li class="nav-item mb-2">
            <span class="text-small text-muted float-right">Configuración</span>
        </li>
        <li class="nav-item">
            <button type="button" class="btn btn-primary btn-sm btn-block m-1"
                    data-toggle="modal" data-target="#modal-reportes-stock"
                --}}{{--@if(!comprobarPermisos('almacenes.index')) disabled @endif--}}{{-- >
                Atributos
            </button>
        </li>--}}
        {{--<li class="nav-item">
            <button type="button" class="btn btn-primary btn-sm btn-block m-1"
                    data-toggle="modal" data-target="#modal-reportes-ajustes"
                --}}{{--@if(!comprobarPermisos('almacenes.index')) disabled @endif--}}{{-- >
                Excel 2
            </button>
        </li>--}}
    </ul>
</div>
