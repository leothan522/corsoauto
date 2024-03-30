<?php

namespace App\Livewire\Dashboard;

use App\Models\Parametro;
use App\Models\Sede;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class SedesComponent extends Component
{

    use LivewireAlert;

    public $rows = 0, $numero = 14, $tableStyle = false;
    public $view = true, $form = false, $ver = false, $nuevo = false, $editar = false, $cancelar = false, $footer = false, $keyword;
    public $nombre, $direccion, $adicional, $estados_id, $municipios_id, $parroquias_id, $ciudades_id, $estatus;
    public $sedes_id, $codigo, $verEstado, $verMunicipio, $verParroquia, $verCiudad;
    public $cargando = false;

    public function mount()
    {
        $this->setLimit();
    }

    public function render()
    {
        $sedes = Sede::buscar($this->keyword)
            ->orderBy('created_at', 'DESC')
            ->limit($this->rows)
            ->get();
        $rowsSedes = Sede::count();

        if ($rowsSedes > $this->numero) {
            $this->tableStyle = true;
        }

        return view('livewire.dashboard.sedes-component')
            ->with('listarSedes', $sedes)
            ->with('total', $rowsSedes);
    }

    public function setLimit()
    {
        if (numRowsPaginate() < $this->numero) {
            $rows = $this->numero;
        } else {
            $rows = numRowsPaginate();
        }
        $this->rows = $this->rows + $rows;
    }

    public function limpiar()
    {
        $this->reset([
            'view', 'form', 'ver', 'nuevo', 'editar', 'cancelar', 'footer',
            'sedes_id', 'nombre', 'direccion', 'adicional', 'estados_id', 'municipios_id', 'parroquias_id', 'ciudades_id', 'estatus',
            'verEstado', 'verMunicipio', 'verParroquia', 'verCiudad',
            'cargando'
        ]);
        $this->resetErrorBag();
    }

    public function create()
    {
        $this->limpiar();
        $this->dispatch('initSelect')->to(SelectsTerritorioComponent::class);
        $this->view = false;
        $this->form = true;
        $this->nuevo = true;
        $this->cancelar = true;
        $this->ver = false;
    }

    public function show($id)
    {
        $this->limpiar();
        $sede = Sede::find($id);
        $this->sedes_id = $sede->id;
        $this->estados_id = $sede->estados_id;
        $this->verEstado = $sede->estado->nombre;
        $this->municipios_id = $sede->municipios_id;
        $this->verMunicipio = $sede->municipio->nombre;
        $this->parroquias_id = $sede->parroquias_id;
        $this->verParroquia = $sede->parroquia->nombre;
        $this->ciudades_id = $sede->ciudades_id;
        $this->verCiudad = $sede->ciudad->nombre;
        $this->codigo = $sede->codigo;
        $this->direccion = $sede->direccion;
        $this->adicional = $sede->adicional;
        $this->nombre = $sede->nombre;
        $this->estatus = $sede->estatus;
        $this->view = false;
        $this->ver = true;
        $this->editar = true;
        $this->footer = true;
    }

    public function rules()
    {
        return [
            'nombre' => ['required', 'max:100', Rule::unique('sedes', 'nombre')->ignore($this->sedes_id)],
            'direccion' => 'required',
            'estados_id' => 'required',
            'municipios_id' => 'required',
            'parroquias_id' => 'required',
            'ciudades_id' => 'required'
        ];
    }

    public function save()
    {
        $this->validate();

        if ($this->sedes_id && !$this->nuevo) {
            $sede = Sede::find($this->sedes_id);
        } else {
            $sede = new Sede();
            $codigo = nextCodigo('codigo_sede');
            $sede->codigo = $codigo;
        }
        $sede->nombre = $this->nombre;
        $sede->direccion = $this->direccion;
        $sede->adicional = $this->adicional;
        $sede->estados_id = $this->estados_id;
        $sede->municipios_id = $this->municipios_id;
        $sede->parroquias_id = $this->parroquias_id;
        $sede->ciudades_id = $this->ciudades_id;
        $sede->save();

        if ($this->nuevo) {
            $parametro = Parametro::where('nombre', 'codigo_sede')->first();
            if ($parametro) {
                $num = $parametro->tabla_id + 1;
                $parametro->tabla_id = $num;
            } else {
                $parametro = new Parametro();
                $parametro->nombre = 'codigo_sede';
                $parametro->tabla_id = 2;
                $parametro->valor = 'N-';
            }
            $parametro->save();
        }
        $this->show($sede->id);
        $this->reset('keyword');
        $this->alert('success', 'Datos Guardados.');
    }

    public function edit()
    {
        $this->dispatch('initSelect')->to(SelectsTerritorioComponent::class);
        $this->dispatch('editTerritorio', estado: $this->estados_id, municipio: $this->municipios_id, parroquia: $this->parroquias_id, ciudad: $this->ciudades_id);
        $this->ver = false;
        $this->editar = false;
        $this->footer = false;
        $this->form = true;
        $this->cancelar = true;
        $this->cargando = true;
    }

    public function destroy()
    {
        $this->confirm('¿Estas seguro?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'confirmButtonText' =>  '¡Sí, bórralo!',
            'text' =>  '¡No podrás revertir esto!',
            'cancelButtonText' => 'No',
            'onConfirmed' => 'confirmed',
        ]);
    }

    #[On('confirmed')]
    public function confirmed()
    {
        $sede = Sede::find($this->sedes_id);

        //codigo para verificar si realmente se puede borrar, dejar false si no se requiere validacion
        $vinculado = false;

        if ($vinculado) {
            $this->alert('warning', '¡No se puede Borrar!', [
                'position' => 'center',
                'timer' => '',
                'toast' => false,
                'text' => 'El registro que intenta borrar ya se encuentra vinculado con otros procesos.',
                'showConfirmButton' => true,
                'onConfirmed' => '',
                'confirmButtonText' => 'OK',
            ]);
        } else {
            $sede->delete();
            $this->alert(
                'success',
                'Registro Eliminado.'
            );
            $this->limpiar();
            $this->reset('keyword');
        }
    }

    public function btnEstatus()
    {
        $sede = Sede::find($this->sedes_id);

        //codigo para verificar si realmente se puede borrar, dejar false si no se requiere validacion
        $vinculado = false;

        if ($vinculado) {
            $this->alert('warning', '¡No se puede Borrar!', [
                'position' => 'center',
                'timer' => '',
                'toast' => false,
                'text' => 'El registro que intenta borrar ya se encuentra vinculado con otros procesos.',
                'showConfirmButton' => true,
                'onConfirmed' => '',
                'confirmButtonText' => 'OK',
            ]);
        } else {
            if ($sede->estatus){
                $sede->estatus = 0;
                $this->estatus = 0;
                $this->alert('info', 'Inactivo.');
            }else{
                $sede->estatus = 1;
                $this->estatus = 1;
                $this->alert('success', 'Activo.');
            }
            $sede->save();
        }
    }

    public function btnCancelar()
    {
        if ($this->sedes_id) {
            $this->show($this->sedes_id);
        } else {
            $this->limpiar();
        }
    }

    #[On('buscar')]
    public function buscar($keyword)
    {
        $this->keyword = $keyword;
    }

    public function limpiarBuscar()
    {
        $this->reset('keyword');
        $this->btnCancelar();
    }

    #[On('getEstado')]
    public function getEstado($id)
    {
        $this->estados_id = $id;
        $this->reset(['municipios_id', 'parroquias_id', 'ciudades_id']);
    }

    #[On('getMunicipio')]
    public function getMunicipio($id)
    {
        $this->municipios_id = $id;
    }

    #[On('getParroquia')]
    public function getParroquia($id)
    {
        $this->parroquias_id = $id;
    }

    #[On('getCiudad')]
    public function getCiudad($id)
    {
        $this->ciudades_id = $id;
    }

    #[On('editTerritorio')]
    public function editTerritorio($estado, $municipio, $parroquia, $ciudad)
    {
        //JS
    }

    #[On('resetCargando')]
    public function resetCargando()
    {
        $this->reset('cargando');
    }

}
