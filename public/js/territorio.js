function select_territorio(id, data, event) {
    let html = '<div class="input-group-prepend">' +
        '<span class="input-group-text">' +
        '<i class="far fa-bookmark"></i>' +
        '</span>' +
        '</div> ' +
        '<select id="' + id + '"></select>';
    $('#div_' + id).html(html);

    $('#' + id).select2({
        theme: 'bootstrap4',
        data: data,
        placeholder: 'Seleccione',
    });
    $('#' + id).val(null).trigger('change');
    $('#' + id).on('change', function () {
        var val = $(this).val();
        Livewire.dispatch(event, {id: val});
    });
}

Livewire.on('selectEstados', ({ data }) => {
    select_territorio('select_territorio_estado', data, 'getselectEstados');
});

Livewire.on('setSelectEstados', ({ id }) => {
    $('#select_territorio_estado').val(id).trigger('change');
});

Livewire.on('selectMunicipio', ({ data }) => {
    select_territorio('select_territorio_municipio', data, 'getselectMunicipio');
});

Livewire.on('setSelectMunicipio', ({ id }) => {
    $('#select_territorio_municipio').val(id).trigger('change');
});

Livewire.on('selectCiudad', ({ data }) => {
    select_territorio('select_territorio_ciudades', data, 'getselectCiudad');
});

Livewire.on('setSelectCiudad', ({ id }) => {
    $('#select_territorio_ciudades').val(id).trigger('change');
});

Livewire.on('selectParroquia', ({ data }) => {
    select_territorio('select_territorio_parroquia', data, 'getselectParroquia');
});

Livewire.on('setSelectParroquia', ({ id }) => {
    $('#select_territorio_parroquia').val(id).trigger('change');
});

console.log('territorio');
