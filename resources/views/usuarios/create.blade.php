@extends('layout')

@section('title','Perfil | ' . 'Creación de Usuario')

@section('content')

@include('partials.validation-errors')


<form  method='POST' action=" {{route('usuarios.store')}} ">
    
    @include('usuarios.form',['btnText'=>'Crear','btnTextCancel'=>'Cancelar'] )
</form>

@endsection
