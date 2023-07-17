<?php

namespace App\Http\Livewire;

use App\Models\Consultorio;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    public $search;
    public $sort='id';
    public $direction='desc';


    public function render()
    {
        
         $usuarios=User::where(
            'name',
            'LIKE',
            '%'.$this->search.'%'
            )->orwhere('email',
            'LIKE',
            '%'.$this->search.'%')
            ->orderBy($this->sort,$this->direction)
            ->paginate(10);

        // $consultas = DB::table('consultas')
        // ->join('pacientes',function(JoinClause $join){
        //     $join->on('paciente_id','=','pacientes.id')
        //     ->where('pacientes.cnombre',
        //     'LIKE',
        //     '%'.$this->search.'%');
        // })->get();
        
        return view('livewire.user-list',compact('usuarios'));
        
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
