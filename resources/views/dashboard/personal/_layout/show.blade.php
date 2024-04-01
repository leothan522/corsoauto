<div class="row" xmlns:wire="http://www.w3.org/1999/xhtml">

    <div class="col-md-6">

        <div class="card card-outline card-navy">

            <div class="card-body box-profile">
                {{--<h1 class="profile-username text-center text-bold">
                    {{ mb_strtoupper($nombre) }}
                </h1>--}}
                <ul class="list-group list-group-unbordered {{--mt-3--}}">
                    <li class="list-group-item">
                        <b>Cedula</b> <span class="text-purple text-bold float-right text-uppercase">{{ formatoMillares($cedula, 0) }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Nombre</b> <span class="text-purple text-bold float-right text-uppercase">{{ $nombre }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Apellido</b> <span class="text-purple text-bold float-right text-uppercase">{{ $apellido }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Teléfono</b> <span class="text-purple text-bold float-right text-uppercase">
                            @if(!empty($telefono))
                                {{ $telefono }}
                            @else
                                -
                            @endif
                        </span>
                    </li>
                </ul>

            </div>

        </div>

    </div>

    <div class="col-md-6">

        <div class="card card-navy card-outline">
            <div class="card-body box-profile">

            <ul class="list-group list-group-unbordered {{--mt-3--}}">
                <li class="list-group-item">
                    <b>Sede</b> <span class="text-purple text-bold float-right text-uppercase">{{ $verSede }}</span>
                </li>
                <li class="list-group-item">
                    <b>Cargo</b> <span class="text-purple text-bold float-right text-uppercase">{{ $verCargo }}</span>
                </li>
                @if(!empty($adicional))
                <li class="list-group-item">
                    <b>Información Adicional</b> <br> <a class="text-uppercase">{{ $adicional }}</a>
                </li>
                @endif
                <li class="list-group-item">
                    <b>Estatus</b> <span class="text-purple text-bold float-right text-uppercase">
                        @if($estatus)
                            Activo
                        @else
                            Inactivo
                        @endif
                    </span>
                </li>
            </ul>

            </div>
        </div>

    </div>

</div>
