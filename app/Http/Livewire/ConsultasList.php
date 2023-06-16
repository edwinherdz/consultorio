<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\Consulta;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class ConsultasList extends Component
{

    use WithPagination;
    public $search;
    public $sort='id';
    public $direction='desc';


    public function render()
    {
         $consultas=Consulta::where(
            'id',
            'LIKE',
            '%'.$this->search.'%'
            )->orwhere('cdiagnostico',
            'LIKE',
            '%'.$this->search.'%')
            ->orderBy($this->sort,$this->direction)
            ->get();

        // $consultas = DB::table('consultas')
        // ->join('pacientes',function(JoinClause $join){
        //     $join->on('paciente_id','=','pacientes.id')
        //     ->where('pacientes.cnombre',
        //     'LIKE',
        //     '%'.$this->search.'%');
        // })->get();
        
        return view('livewire.consultas-list',compact('consultas'));
        
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
