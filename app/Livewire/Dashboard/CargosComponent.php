<?php

namespace App\Livewire\Dashboard;

use App\Models\Cargo;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class CargosComponent extends Component
{
    use LivewireAlert;

    public $rows = 0;
    public $cargos_id, $nombre, $keyword;

    public function mount()
    {
        $this->setLimit();
    }

    public function render()
    {
        $cargos = Cargo::buscar($this->keyword)
            ->limit($this->rows)
            ->get()
        ;
        $rowsCargos = Cargo::count();
        return view('livewire.dashboard.cargos-component')
            ->with('listarCargos', $cargos)
            ->with('rowsCargos', $rowsCargos);
    }

    public function setLimit()
    {
        if (numRowsPaginate() < 12) { $rows = 12; } else { $rows = numRowsPaginate(); }
        $this->rows = $this->rows + $rows;
    }

    #[On('limpiarCargos')]
    public function limpiarCargos()
    {
        $this->reset([
            'cargos_id', 'nombre', 'keyword'
        ]);
        $this->resetErrorBag();
    }

    public function save()
    {
        $rules = [
            'nombre'       =>  ['required', 'min:2', 'max:100'/*, 'alpha_dash:ascii'*/, Rule::unique('cargos', 'nombre')->ignore($this->cargos_id)],
        ];
        /*$messages = [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.min' => 'El nombre debe contener al menos 3 caracteres.',
            'nombre.max' => 'El nombre no debe ser mayor que 15 caracteres.',
            'nombre.alpha_num' => ' El campo nombre sólo debe contener letras y números.'
        ];*/

        $this->validate($rules);
        if (is_null($this->cargos_id)){
            //nuevo
            $cargo = new Cargo();
            $message = "Cargo Creado.";
        }else{
            //editar
            $cargo = Cargo::find($this->cargos_id);
            $message = "Cargo Actualizado.";
        }
        $cargo->nombre = $this->nombre;

        $cargo->save();
        $this->dispatch('initSelects', select: 'cargos')->to(ResponsablesComponent::class);
        $this->limpiarCargos();
        $this->alert('success', $message);
    }

    public function edit($id)
    {
        $cargo = Cargo::find($id);
        $this->cargos_id = $cargo->id;
        $this->nombre = $cargo->nombre;
    }

    public function destroy($id)
    {
        $this->cargos_id = $id;
        $this->confirm('¿Estas seguro?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'confirmButtonText' =>  '¡Sí, bórralo!',
            'text' =>  '¡No podrás revertir esto!',
            'cancelButtonText' => 'No',
            'onConfirmed' => 'confirmedCargos',
        ]);
    }

    #[On('confirmedCargos')]
    public function confirmedCargos()
    {
        $cargo = Cargo::find($this->cargos_id);

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
            $cargo->delete();
            $this->alert(
                'success',
                'Cargo Eliminado.'
            );
            $this->dispatch('initSelects', select: 'cargos')->to(ResponsablesComponent::class);
        }

        $this->limpiarCargos();
    }

    public function buscar()
    {
        //
    }


}
