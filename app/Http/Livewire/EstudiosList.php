<?php

namespace App\Http\Livewire;

use App\Models\Estudio;
use Livewire\Component;

class EstudiosList extends Component
{

    public $search;
    public $sort='id';
    public $direction='desc';

    public function render()
    {

        $estudios=Estudio::where(
            'cnombre',
            'LIKE',
            '%'.$this->search.'%'
            )->orwhere('cdescripcion',
            'LIKE',
            '%'.$this->search.'%')
            ->orderBy($this->sort,$this->direction)
            ->paginate(10);
        
            return view('livewire.estudios-list',compact('estudios')


        );
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
