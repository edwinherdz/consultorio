@extends('layout')

@section('title','Perfil | ' . auth()->user()->name)

@section('content')

@include('usuarios.barraherramientas')

@include('partials.validation-errors')

@include('usuarios.form',['btnText'=>'Actualizar','btnTextCancel'=>'Cancelar'] )


@endsection


