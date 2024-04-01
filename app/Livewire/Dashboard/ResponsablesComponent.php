<?php

namespace App\Livewire\Dashboard;

use App\Models\Cargo;
use App\Models\Responsable;
use App\Models\Sede;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class ResponsablesComponent extends Component
{
    use LivewireAlert;

    public $rows = 0, $numero = 14, $tableStyle = false;
    public $view = true, $form = false, $ver = false, $nuevo = false, $editar = false, $cancelar = false, $footer = false, $keyword;
    public $cargando = false;
    public $cedula, $nombre, $apellido, $telefono, $cargos_id, $sedes_id, $estatus, $adicional;
    public $responsables_id, $verCargo, $verSede;

    public function mount()
    {
        $this->setLimit();
    }

    public function render()
    {
        $responsables = Responsable::buscar($this->keyword)
            ->orderBy('created_at', 'DESC')
            ->limit($this->rows)
            ->get();
        $rowsResponsables = Responsable::count();

        if ($rowsResponsables > $this->numero) {
            $this->tableStyle = true;
        }

        return view('livewire.dashboard.responsables-component')
            ->with('listarResponsables', $responsables)
            ->with('total', $rowsResponsables);
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
            'view', 'form', 'ver', 'nuevo', 'editar', 'cancelar', 'footer', 'cargando',
            'responsables_id', 'cedula', 'nombre', 'apellido', 'telefono', 'cargos_id', 'sedes_id', 'estatus',
            'adicional', 'verCargo', 'verSede',
        ]);
        $this->resetErrorBag();
    }

    public function create()
    {
        $this->limpiar();
        $this->initSelects();
        $this->view = false;
        $this->form = true;
        $this->nuevo = true;
        $this->cancelar = true;
        $this->ver = false;
    }

    public function show($id)
    {
        $this->limpiar();
        $responsable = Responsable::find($id);
        $this->responsables_id = $responsable->id;
        $this->cedula = $responsable->cedula;
        $this->nombre = $responsable->nombre;
        $this->apellido = $responsable->apellido;
        $this->telefono = $responsable->telefono;
        $this->cargos_id = $responsable->cargos_id;
        $this->sedes_id = $responsable->sedes_id;
        $this->verSede = $responsable->sede->nombre;
        $this->verCargo = $responsable->cargo->nombre;
        $this->adicional = $responsable->adicional;
        $this->estatus = $responsable->estatus;
        $this->view = false;
        $this->ver = true;
        $this->editar = true;
        $this->footer = true;
    }

    public function rules()
    {
        return [
            'cedula' => ['required', 'integer', 'min_digits:6', 'max_digits:9', Rule::unique('responsables', 'cedula')->ignore($this->responsables_id)],
            'nombre' => 'required',
            'apellido' => 'required',
            'cargos_id' => 'required',
            'sedes_id' => 'required'
        ];
    }

    public function save()
    {
        $this->validate();

        if ($this->responsables_id && !$this->nuevo) {
            $responsable = Responsable::find($this->responsables_id);
        } else {
            $responsable = new Responsable();
        }

        $responsable->cedula = $this->cedula;
        $responsable->nombre = $this->nombre;
        $responsable->apellido = $this->apellido;
        $responsable->telefono = $this->telefono;
        $responsable->cargos_id = $this->cargos_id;
        $responsable->sedes_id = $this->sedes_id;
        $responsable->adicional = $this->adicional;
        $responsable->save();

        $this->show($responsable->id);
        $this->reset('keyword');
        $this->alert('success', 'Datos Guardados.');
    }

    public function edit()
    {
        $this->initSelects();
        $this->ver = false;
        $this->editar = false;
        $this->footer = false;
        $this->form = true;
        $this->cancelar = true;
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
        $responsable = Responsable::find($this->responsables_id);

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
            $responsable->delete();
            $this->alert('success', 'Registro Eliminado.');
            $this->limpiar();
            $this->reset('keyword');
        }
    }

    public function btnEstatus()
    {
        $responsable = Responsable::find($this->responsables_id);

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
            if ($responsable->estatus){
                $responsable->estatus = 0;
                $this->estatus = 0;
                $this->alert('info', 'Inactivo.');
            }else{
                $responsable->estatus = 1;
                $this->estatus = 1;
                $this->alert('success', 'Activo.');
            }
            $responsable->save();
        }
    }

    public function btnCancelar()
    {
        if ($this->responsables_id) {
            $this->show($this->responsables_id);
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

    #[On('initSelects')]
    public function initSelects($select = null)
    {
        switch ($select) {

            case 'sedes':
                $this->dispatch('selectSedes', data: $this->dataSedes());
                if ($this->sedes_id){
                    $this->dispatch('setSelectSedes', id: $this->sedes_id);
                }
                break;

            case 'cargos':
                $this->dispatch('selectCargos', data: $this->dataCargos());
                if ($this->cargos_id){
                    $this->dispatch('setSelectCargos', id: $this->cargos_id);
                }
                break;

            default:

                $this->dispatch('selectSedes', data: $this->dataSedes());
                $this->dispatch('selectCargos', data: $this->dataCargos());

                if ($this->sedes_id){
                    $this->dispatch('setSelectSedes', id: $this->sedes_id);
                }

                if ($this->cargos_id){

                    $this->dispatch('setSelectCargos', id: $this->cargos_id);
                }

                break;
        }
    }

    protected function dataSedes(): array
    {
        $sedes = Sede::orderBy('nombre', 'ASC')->get();
        return dataSelect2($sedes);
    }

    #[On('selectSedes')]
    public function selectSedes($data)
    {
        //JS
    }

    #[On('getselectSedes')]
    public function getselectSedes($id)
    {
        $this->sedes_id = $id;
    }

    #[On('setSelectSedes')]
    public function setSelectSedes($id)
    {
        //JS
    }

    protected function dataCargos(): array
    {
        $cargos = Cargo::orderBy('nombre', 'ASC')->get();
        return dataSelect2($cargos, 'nombre');
    }

    #[On('selectCargos')]
    public function selectCargos($data)
    {
        //JS
    }

    #[On('getselectCargos')]
    public function getselectCargos($id)
    {
        $this->cargos_id = $id;
    }

    #[On('setSelectCargos')]
    public function setSelectCargos($id)
    {
        //JS
    }

}
