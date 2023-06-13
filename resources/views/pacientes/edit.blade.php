@extends('layout')
@section('title', 'Editando Paciente')
@section('content')

<div class="container  col-6">
<h2 class="text-base font-semibold leading-7 text-gray-900">Editando Paciente</h2>
</div>


@include('partials.validation-errors')

<form  method='POST' action="{{route('pacientes.update',$paciente)}} ">
@method('PATCH')
    
    @include('pacientes._form',['btnText'=>'Actualizar','btnTextCancel'=>'Cancelar'] )
</form>

@endsection
