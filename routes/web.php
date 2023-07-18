<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\ConsultorioController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EstudioController;
use App\Http\Controllers\UserController;
use App\Models\Estudio;

Route::view('/','home')->name('home')->middleware('auth');
Auth::routes();
Route::get('/datosconsultorio',[ ConsultorioController::class,'index'])->name('consultorio.index')->middleware('auth');
Route::resource('consulta',ConsultaController::class)->parameters(['consulta'=>'consulta'])->names('consultas')->middleware('auth');
Route::get('/consulta/pdf/consultaslist',[PdfController::class,'pdflist'])->name('consultas.pdflist')->middleware('auth');
Route::resource('paciente',PacienteController::class)->names('pacientes')->middleware('auth');
Route::get('/consulta/pdf/{consulta}',[PdfController::class,'pdf'])->name('consultas.pdf')->middleware('auth');
Route::resource('consultorio', ConsultorioController::class)->names('consultorios')->middleware('auth');
Route::resource('usuarios',UserController::class)->names('usuarios')->middleware('auth');
Route::resource('consultorio', ConsultorioController::class)->names('consultorios')->middleware('auth');
Route::resource('estudio', EstudioController::class)->names('estudios')->middleware('auth');


