<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\ConsultorioController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

Route::view('/','home')->name('home')->middleware('auth');

Auth::routes();

Route::get('/datosconsultorio',[ ConsultorioController::class,'index'])->name('consultorio.index')->middleware('auth');
Route::resource('consulta',ConsultaController::class)->parameters(['consulta'=>'consulta'])->names('consultas')->middleware('auth');
Route::get('/consulta/pdf/consultaslist',[PdfController::class,'pdflist'])->name('consultas.pdflist')->middleware('auth');
Route::resource('paciente',PacienteController::class)->names('pacientes')->middleware('auth');
Route::get('/consulta/pdf/{consulta}',[PdfController::class,'pdf'])->name('consultas.pdf')->middleware('auth');
Route::get('/usuario/show/{usuario}',[UserController::class,'show'])->name('usuarios.show')->middleware('auth');
Route::resource('consultorio', ConsultorioController::class)->names('consultorios')->middleware('auth');

Route::get('/usuario/{usuario}/edit',[UserController::class,'edit'])->name('usuarios.edit')->middleware('auth');
Route::patch('/usuario/{usuario}',[UserController::class,'update'])->name('usuarios.update')->middleware('auth');

Route::resource('consultorio', ConsultorioController::class)->names('consultorios')->middleware('auth');



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



