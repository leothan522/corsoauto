<?php

namespace App\Livewire\Dashboard;

use App\Models\Ciudad;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use Livewire\Attributes\On;
use Livewire\Component;

class SelectsTerritorioComponent extends Component
{

    public $estados_id, $municipios_id, $ciudades_id, $parroquias_id;

    public function mount()
    {
        $this->dispatch('selectEstados', data: $this->dataEstados());
    }

    public function render()
    {
        return view('livewire.dashboard.selects-territorio-component');
    }

    protected function dataEstados(): array
    {
        $estados = Estado::orderBy('nombre', 'ASC')->get();
        return dataSelect2($estados, 'nombre');
    }

    #[On('selectEstados')]
    public function selectEstados($data)
    {
        //JS
    }

    #[On('getselectEstados')]
    public function getselectEstados($id)
    {
        $this->reset(['municipios_id', 'ciudades_id', 'parroquias_id']);
        $this->estados_id = $id;
        $this->dispatch('selectMunicipio', data: $this->dataMunicipio());
        $this->dispatch('selectCiudad', data: $this->dataCiudad());
        $this->dispatch('selectParroquia', data: $this->dataParroquia());
    }

    #[On('setSelectEstados')]
    public function setSelectEstados($id)
    {
        //JS
    }

    protected function dataMunicipio(): array
    {
        $municipios = Municipio::where('estados_id', $this->estados_id)->orderBy('nombre', 'ASC')->get();
        return dataSelect2($municipios, 'nombre');
    }

    #[On('selectMunicipio')]
    public function selectMunicipio($data)
    {
        //JS
    }

    #[On('getselectMunicipio')]
    public function getselectMunicipio($id)
    {
        $this->municipios_id = $id;
        $this->dispatch('selectParroquia', data: $this->dataParroquia());
    }

    #[On('setSelectMunicipio')]
    public function setSelectMunicipio($id)
    {
        //JS
    }

    protected function dataCiudad(): array
    {
        $ciudades = Ciudad::where('estados_id', $this->estados_id)->orderBy('nombre', 'ASC')->get();
        return dataSelect2($ciudades, 'nombre');
    }

    #[On('selectCiudad')]
    public function selectCiudad($data)
    {
        //JS
    }

    #[On('getselectCiudad')]
    public function getselectCiudad($id)
    {
        $this->ciudades_id = $id;
    }

    #[On('setSelectCiudad')]
    public function setSelectCiudad($id)
    {
        //JS
    }

    protected function dataParroquia(): array
    {
        $parroquias = Parroquia::where('municipios_id', $this->municipios_id)->orderBy('nombre', 'ASC')->get();
        return dataSelect2($parroquias, 'nombre');
    }

    #[On('selectParroquia')]
    public function selectParroquia($data)
    {
        //JS
    }

    #[On('getselectParroquia')]
    public function getselectParroquia($id)
    {
        $this->parroquias_id = $id;
    }

    #[On('setSelectParroquia')]
    public function setSelectParroquia($id)
    {
        //JS
    }

}
