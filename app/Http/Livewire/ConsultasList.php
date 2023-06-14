<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\Consulta;
use Livewire\Component;


class ConsultasList extends Component
{

    use WithPagination;
    public $search;


    public function render()
    {
        
        return view('livewire.consultas-list',[
            'consultas'=>Consulta::where(
                'id',
                'LIKE',
                '%'.$this->search.'%'
                )->latest('id')->paginate(5)
        
        ]);
        
    }
}
