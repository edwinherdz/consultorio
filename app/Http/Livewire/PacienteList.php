<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Paciente;



class PacienteList extends Component
{
    use WithPagination;
    public $search;
    public $sort='id';
    public $direction='desc';


    public function render()
    {
         $pacientes=Paciente::where(
            'cnombre',
            'LIKE',
            '%'.$this->search.'%'
            )->orwhere('cprimerapellido',
            'LIKE',
            '%'.$this->search.'%')
            ->orderBy($this->sort,$this->direction)
            ->withCount('consultas')->paginate(10);

    
        return view('livewire.paciente-list',compact('pacientes'));
        
    }

    public function order($sort) {
       
        if ($this->sort == $sort) {

            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
            
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
       
        
    }
}
