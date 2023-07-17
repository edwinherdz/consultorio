<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveEstudioMedicoRequest;
use App\Models\Estudio;
use Illuminate\Http\Request;

class EstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('estudiosmedicos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiosmedicos.create', [
            'estudio' => new Estudio
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveEstudioMedicoRequest $request)
    {
        
        Estudio::create($request->validated());
        return redirect()->route('estudios.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Estudio $estudio)
    {
        return view('estudiosmedicos.show',[
            'estudio'=>$estudio]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudio $estudio)
    {
        return view('estudiosmedicos.edit',[
            'estudio' => $estudio
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SaveEstudioMedicoRequest $request, Estudio $estudio)
    {
        $estudio->update($request->validated());
        return redirect()->route('estudios.show',$estudio); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
