@extends('layout')
@section('title', 'Crear Estudio Médico')
@section('content')

<div class="container col-6">
<h2 class="text-base font-semibold leading-7 text-gray-900">Creando Estudio Médico</h2>
</div>


@include('partials.validation-errors')

<form  method='POST' action=" {{route('estudios.store')}} ">

    @include('estudiosmedicos._form',['btnText'=>'Actualizar','btnTextCancel'=>'Cancelar'] )
</form>

@endsection
