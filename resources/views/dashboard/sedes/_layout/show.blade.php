<div class="row" xmlns:wire="http://www.w3.org/1999/xhtml">

    <div class="col-md-6">

        <div class="card card-outline card-navy">

            <div class="card-body box-profile">
                {{--<h1 class="profile-username text-center text-bold">
                    {{ mb_strtoupper($nombre) }}
                </h1>--}}
                <ul class="list-group list-group-unbordered {{--mt-3--}}">
                    <li class="list-group-item">
                        <b>Código</b> <span class="text-purple text-bold float-right text-uppercase">{{ $codigo }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Estado</b> <span class="text-purple text-bold float-right text-uppercase">{{ $verEstado }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Municipio</b> <span class="text-purple text-bold float-right text-uppercase">{{ $verMunicipio }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Parroquia</b> <span class="text-purple text-bold float-right text-uppercase">{{ $verParroquia }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Ciudad</b> <span class="text-purple text-bold float-right text-uppercase">{{ $verCiudad }}</span>
                    </li>
                </ul>

            </div>

        </div>

    </div>

    <div class="col-md-6">

        <div class="card card-navy card-outline">
            <div class="card-body box-profile">

            <ul class="list-group list-group-unbordered mt-3">
                <h1 class="profile-username text-center text-bold">
                    {{ mb_strtoupper($nombre) }}
                </h1>
                <li class="list-group-item">
                    <b>Dirección</b> <br> <a class="text-uppercase">{{ $direccion }}</a>
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
