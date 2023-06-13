@extends('layout')
@section('title', 'Modificar Consulta')
@section('content')

<div class="container  col-6">
<h2 class="text-base font-semibold leading-7 text-gray-900">Editando Consulta</h2>
</div>


@include('partials.validation-errors')

<form  method='POST' action=" {{route('consultas.update',$consulta)}} ">
@method('PATCH')
    
    @include('consultas._form',['btnText'=>'Actualizar','btnTextCancel'=>'Cancelar'] )
</form>

@endsection
