<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ConsultaController;
use App\Http\Livewire\ConsultasList;
use Illuminate\Support\Facades\Auth;

Route::view('/','home')->name('home')->middleware('auth');

Auth::routes();

Route::resource('consulta', ConsultaController::class)->parameters(['consulta'=>'consulta'])->names('consultas')->middleware('auth');
Route::resource('paciente', PacienteController::class)->names('pacientes')->middleware('auth');
Route::get('/consulta/pdf/{consulta}',[PdfController::class,'pdf'])->name('consultas.pdf')->middleware('auth');



// Route::get('/consulta',[ConsultaController::class,'index'])->name('consultas.index')->middleware('auth');
// Route::get('/paciente',[PacienteController::class,'index'])->name('pacientes.index')->middleware('auth');

// Route::get('/consulta/crear',[ConsultaController::class,'create'])->name('consultas.create')->middleware('auth');
// Route::post('/consulta',[ConsultaController::class,'store'])->name('consultas.store')->middleware('auth');


// Route::get('/{consulta}/editar',[ConsultaController::class,'edit'])->name('consultas.edit')->middleware('auth');
// Route::patch('/consulta/{consulta}', [ConsultaController::class,'update'])->name('consultas.update')->middleware('auth');
// Route::get('/{consulta}',[ConsultaController::class,'show'])->name('consultas.show')->middleware('auth');


// Route::post('/paciente',[PacienteController::class,'store'])->name('pacientes.store')->middleware('auth');
// Route::get('/paciente/crear',[PacienteController::class,'create'])->name('pacientes.create')->middleware('auth');
// Route::patch('/paciente/{consulta}', [PacienteController::class,'update'])->name('pacientes.update')->middleware('auth');
// Route::get('/paciente/{paciente}/editar',[PacienteController::class,'edit'])->name('pacientes.edit')->middleware('auth');;
// Route::get('/paciente/{paciente}',[PacienteController::class,'show'])->name('pacientes.show')->middleware('auth');



