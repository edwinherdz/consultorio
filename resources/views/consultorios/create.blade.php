@extends('layout')
@section('title', 'Crear Consultorio')
@section('content')

<div class="container col-6">
<h2 class="text-base font-semibold leading-7 text-gray-900">Creando Consultorio</h2>
</div>


@include('partials.validation-errors')

<form  method='POST' action=" {{route('consultorios.store')}} ">

    @include('consultorios._form',['btnText'=>'Actualizar','btnTextCancel'=>'Cancelar'] )
</form>

@endsection
