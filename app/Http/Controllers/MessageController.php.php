<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    
    public function store()
    {
        $msg= request()->Validated([
            'idpaciente'=>'required',
            'eedad'=>'required',
            'dtalla'=>'required',
            'dpeso'=>'required',
            'calergias'=>'required',
            'cpresion'=>'required',
            'cdiagnostico'=>'required',
            'ctratamiento'=>'required',
        ]);
    }


}
