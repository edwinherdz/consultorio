<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveConsultorioRequest;
use App\Models\Consultorio;
use Illuminate\Http\Request;

class ConsultorioController extends Controller
{
    public function index() {

        $consultorio=Consultorio::find(2);

        return view('configuraciones.configuraciones',compact('consultorio'));
        
    }

    public function create()
    {

        return view('consultorios.create', [
            'consultorio' => new Consultorio
        ]);
    }

    public function show(Consultorio $consultorio)
    {

        return view('consultorios.show', [
            'consultorio'=>$consultorio

        ]);
    }

    public function store(SaveConsultorioRequest $request)
    {
    
        Consultorio::create($request->validated());
        $latestId = Consultorio::latest('id')->first()->id;

         return redirect()->route('consultorios.show',$latestId);
    }

    function edit(Consultorio $consultorio) {

        return view('consultorios.edit',[
            'consultorio'=> $consultorio
        ]);
        
    }

    public function update(Consultorio $consultorio , SaveConsultorioRequest $request)
    {
       $consultorio->update($request->validated());
       return redirect()->route('consultorios.show',$consultorio); 
    }
}
