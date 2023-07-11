<?php

namespace App\Http\Livewire;

use App\Models\Detalleconsultaestudio;
use App\Models\Estudio;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ModalEstudios extends Component
{

    public $open=false;
    public function render()
    {
        $estudios=Estudio::get();
        return view('livewire.modal-estudios',compact('estudios'));
    }

    public function cerrarmodal()  {

            $this->open=false;
    
    }

    public function store() {

        Detalleconsultaestudio::create();
         return redirect()->route('consultas.index');

        
    }
}
