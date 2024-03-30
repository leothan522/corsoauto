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

    public function render()
    {
        return view('livewire.dashboard.selects-territorio-component');
    }

    #[On('initSelect')]
    public function initSelect($estado = false)
    {
        $this->reset(['municipios_id', 'ciudades_id', 'parroquias_id']);
        if (!$estado){
            $this->reset(['estados_id']);
            $this->dispatch('selectEstados', data: $this->dataEstados());
        }
        $this->dispatch('selectMunicipio', data: $this->dataMunicipio());
        $this->dispatch('selectCiudad', data: $this->dataCiudad());
        $this->dispatch('selectParroquia', data: $this->dataParroquia());
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
        $this->estados_id = $id;
        $this->initSelect(true);
        $this->dispatch('getEstado', id: $this->estados_id)->to(SedesComponent::class);
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
        $this->dispatch('getMunicipio', id: $this->municipios_id)->to(SedesComponent::class);
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
        $this->dispatch('getCiudad', id: $this->ciudades_id)->to(SedesComponent::class);
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
        $this->dispatch('getParroquia', id: $this->parroquias_id)->to(SedesComponent::class);
    }

    #[On('setSelectParroquia')]
    public function setSelectParroquia($id)
    {
        //JS
    }

}
