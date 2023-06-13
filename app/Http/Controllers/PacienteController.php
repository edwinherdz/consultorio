<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePacienteRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function index()
    {
    
        return view('pacientes.index',[
            'pacientes'=>Paciente::withCount('consultas')->latest()->paginate(),

    ]);
    }


    public function create()
    {
        return view('pacientes.create', [
            'paciente' => new Paciente
        ]);
    }

    public function store(SavePacienteRequest $request)
    {

        Paciente::create($request->validated());
         return redirect()->route('pacientes.index');
    }

    public function show(Paciente $paciente)
    {
        return view('pacientes.show', [
            'paciente'=>$paciente

        ]);
    }

    public function edit(Paciente $paciente)
    {
    
        return view('pacientes.edit',[
            'paciente'=> $paciente,
            //'Pacientes'=>Paciente::pluck('cnombre','id')
        ]);
    }

}
