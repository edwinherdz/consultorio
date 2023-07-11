<?php

namespace App\Http\Livewire;

use App\Models\Estudio;
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
}
