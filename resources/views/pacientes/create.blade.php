@extends('layout')
@section('title', 'Modificar datos del paciente')
@section('content')
<div class="container  col-6">
<h2 class="text-base font-semibold leading-7 text-gray-900">Creando paciente</h2>
</div>


@include('partials.validation-errors')

<form  method='POST' action=" {{route('pacientes.store')}} ">
    
    @include('pacientes._form',['btnText'=>'Guardar','btnTextCancel'=>'Cancelar'] )
</form>

@endsection
