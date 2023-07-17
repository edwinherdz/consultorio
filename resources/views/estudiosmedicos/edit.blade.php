@extends('layout')
@section('title', 'Modificar Consulta'." ". $estudio->cnombre)
@section('content')

<div class="container col-6">
<h2 class="text-base font-semibold leading-7 text-gray-900">Editando Estudio</h2>
</div>


@include('partials.validation-errors')

<form  method='POST' action=" {{route('estudios.update',$estudio)}} ">
@method('PATCH')
    
    @include('estudiosmedicos._form',['btnText'=>'Actualizar','btnTextCancel'=>'Cancelar'] )
</form>

@endsection
