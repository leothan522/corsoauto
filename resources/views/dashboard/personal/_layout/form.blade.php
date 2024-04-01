<form wire:submit="save" xmlns:wire="http://www.w3.org/1999/xhtml">

<div class="row">

    <div class="col-md-6">

            <div class="card card-outline card-navy">

                <div class="card-header">
                    <h5 class="card-title">Datos Básicos</h5>
                    <div class="card-tools">
                        <span class="btn-tool"><i class="fas fa-book"></i></span>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <label for="cedula">Cédula:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                            </div>
                            <input type="text" class="form-control" wire:model="cedula" placeholder="Cédula">
                            @error('cedula')
                            <span class="col-sm-12 text-sm text-bold text-danger">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cedula">Nombre:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                            </div>
                            <input type="text" class="form-control" wire:model="nombre" placeholder="Nombre">
                            @error('nombre')
                            <span class="col-sm-12 text-sm text-bold text-danger">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cedula">Apellido:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                            </div>
                            <input type="text" class="form-control" wire:model="apellido" placeholder="Apellido">
                            @error('apellido')
                            <span class="col-sm-12 text-sm text-bold text-danger">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cedula">Teléfono:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                            </div>
                            <input type="text" class="form-control" wire:model="telefono" placeholder="Teléfono (Opcional)">
                            @error('telefono')
                            <span class="col-sm-12 text-sm text-bold text-danger">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>

                </div>

            </div>

        </div>

    <div class="col-md-6">

        <div class="card card-outline card-navy">
            <div class="card-header">
                <h5 class="card-title">Datos Ubicación</h5>
                <div class="card-tools">
                    <span class="btn-tool"><i class="fas fa-book"></i></span>
                </div>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="email">Sede:</label>
                    <div wire:ignore>
                        <div class="input-group mb-3" id="div_select_personal_sede">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                            </div>
                            <select class="custom-select">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                    @error('sedes_id')
                    <span class="col-sm-12 text-sm text-bold text-danger">
                        <i class="icon fas fa-exclamation-triangle"></i>
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Cargo:</label>
                    <div wire:ignore>
                        <div class="input-group mb-3" id="div_select_personal_cargo">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                            </div>
                            <select class="custom-select">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                    @error('cargos_id')
                    <span class="col-sm-12 text-sm text-bold text-danger">
                        <i class="icon fas fa-exclamation-triangle"></i>
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Información Adicional:</label>
                    <div class="input-group">
                        <textarea class="form-control" wire:model="adicional" placeholder="Información Adicional (Opcional)"></textarea>
                        @error('adicional')
                        <span class="col-sm-12 text-sm text-bold text-danger">
                                <i class="icon fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<div class="row justify-content-end">
        <div class="col-md-4">
            <button type="submit" class="btn btn-block @if($nuevo) btn-success @else btn-primary @endif float-right mr-1"
                    @if($cargando) disabled @endif >
                <i class="fas fa-save"></i> Guardar @if(!$nuevo) Cambios @endif
            </button>
        </div>
    </div>
</form>
