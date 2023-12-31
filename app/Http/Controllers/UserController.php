<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SaveUserRequest;
use App\Models\Consultorio;

class UserController extends Controller
{
    public function show(User $usuario) {

        return view('usuarios.show', [
            'usuario'=>$usuario

        ]);


    }


    public function edit( User $usuario )  {
        
        $consultorios=Consultorio::all();
        return view('usuarios.edit',[
            'usuario'=> $usuario,
            'consultorios'=>$consultorios
            //'Pacientes'=>Paciente::pluck('cnombre','id')
        ]);
    }


    public function update(User $usuario , SaveUserRequest $request)
    {
       $usuario->update($request->validated());
    
       return redirect()->route('usuarios.index'); 
    }

    function index() {

        return view('usuarios.index');
    }
    
    public function create()
    {
        $consultorios=Consultorio::all();
        return view('usuarios.create', [
            'usuario' => new User,
            'consultorios'=>$consultorios

        ]);
    }

    public function store(SaveUserRequest $request)
    {
    
        User::create($request->validated());
         return redirect()->route('usuarios.index');



        //  return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
    }


}
