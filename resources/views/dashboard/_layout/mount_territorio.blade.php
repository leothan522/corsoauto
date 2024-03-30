<div xmlns:wire="http://www.w3.org/1999/xhtml">

    <div class="form-group">
        <label for="email">Estado:</label>
        <div wire:ignore>
            <div class="input-group mb-3" id="div_select_territorio_estado">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                </div>
                <select class="custom-select">
                    <option value="">Seleccione</option>
                </select>
            </div>
        </div>
        @error('estados_id')
        <span class="col-sm-12 text-sm text-bold text-danger">
            <i class="icon fas fa-exclamation-triangle"></i>
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Municipio:</label>
        <div wire:ignore>
            <div class="input-group mb-3" id="div_select_territorio_municipio">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                </div>
                <select class="custom-select">
                    <option value="">Seleccione</option>
                </select>
            </div>
        </div>
        @error('municipios_id')
        <span class="col-sm-12 text-sm text-bold text-danger">
            <i class="icon fas fa-exclamation-triangle"></i>
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Parroquia:</label>
        <div wire:ignore>
            <div class="input-group mb-3" id="div_select_territorio_parroquia">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                </div>
                <select class="custom-select">
                    <option value="">Seleccione</option>
                </select>
            </div>
        </div>
        @error('parroquias_id')
        <span class="col-sm-12 text-sm text-bold text-danger">
            <i class="icon fas fa-exclamation-triangle"></i>
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Ciudad:</label>
        <div wire:ignore>
            <div class="input-group mb-3" id="div_select_territorio_ciudades">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                </div>
                <select class="custom-select">
                    <option value="">Seleccione</option>
                </select>
            </div>
        </div>
        @error('ciudades_id')
        <span class="col-sm-12 text-sm text-bold text-danger">
            <i class="icon fas fa-exclamation-triangle"></i>
            {{ $message }}
        </span>
        @enderror
    </div>

</div>
