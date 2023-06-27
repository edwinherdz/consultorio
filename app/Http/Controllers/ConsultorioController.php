<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use Illuminate\Http\Request;

class ConsultorioController extends Controller
{
    public function index() {

        $consultorio=Consultorio::find(1);

        return view('configuraciones.configuraciones',compact('consultorio'));
        
    }
}
