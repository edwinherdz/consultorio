@extends('layout')

@section('title','Perfil | ' . auth()->user()->name)

@section('content')

@include('partials.validation-errors')


<form  method='POST' action=" {{route('usuarios.update',$usuario)}} ">
@method('PATCH')
    
    @include('usuarios.form',['btnText'=>'Actualizar','btnTextCancel'=>'Cancelar'] )
</form>

@endsection


