<?php

namespace App\Http\Livewire;

use App\Models\Paciente;
use Livewire\Component;

class PacienteDatos extends Component
{

    public $search;
   
    public function render()
    {
        
        $pacientes=Paciente::all();
        $datospacientes=Paciente::find($this->search);

            return view('livewire.paciente-datos',compact('datospacientes','pacientes'));
    }
    
}
