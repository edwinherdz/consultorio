@extends('layout')
@section('title', 'Crear Consulta')
@section('content')
<h2 class="text-base font-semibold leading-7 text-gray-900">Creando Consulta</h2>

@include('partials.validation-errors')
@include('partials.buttonscreate')
<form  method='POST' action=" {{route('consultas.store')}} ">
    
    @include('consultas._form',['btnText'=>'Crear','btnTextCancel'=>'Cancelar'] )
</form>

@endsection
