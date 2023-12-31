<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveConsultaRequest;
use App\Models\Consulta;
use App\Models\Paciente;


class ConsultaController extends Controller
{
    public function index()
    {
        return view('consultas.index');
    }

    public function show(Consulta $consulta)
    {

        return view('consultas.show', [
            'consulta'=>$consulta

        ]);
    }

    public function create()
    {

        return view('consultas.create', [
            'consulta' => new Consulta,
            'pacientes'=>Paciente::get(),
        ]);
    }

    public function store(SaveConsultaRequest $request)
    {
    
        Consulta::create($request->validated());
         return redirect()->route('consultas.index');
    }


    public function edit(Consulta $consulta)
    {
        
        return view('consultas.edit',[
            'consulta'=> $consulta,
            'pacientes' =>Paciente::all(),
        ]);
    }

    public function update(Consulta $consulta , SaveConsultaRequest $request)
    {
       $consulta->update($request->validated());
       return redirect()->route('consultas.show',$consulta); 
    }
}