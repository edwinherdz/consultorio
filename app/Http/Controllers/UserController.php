<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SaveUserRequest;

class UserController extends Controller
{
    public function show() {
        return view('usuarios.show');
    }


    public function edit( User $user )  {

        return view('usuarios.edit',[
            'user'=> $user,
            //'Pacientes'=>Paciente::pluck('cnombre','id')
        ]);
    }


    public function update(User $user , SaveUserRequest $request)
    {
       $user->update($request->validated());
       return redirect()->route('usuarios.show',$user); 
    }

}
