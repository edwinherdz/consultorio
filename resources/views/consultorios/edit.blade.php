@extends('layout')
@section('title', 'Actualizar Consultorio'." ". $consultorio->id)
@section('content')

<div class="container col-6">
<h2 class="text-base font-semibold leading-7 text-gray-900">Editando Consultorio</h2>
</div>


@include('partials.validation-errors')
<button> <a href="{{route('consultorios.edit','2')}}"></a> </button>
<form  method='POST' action=" {{route('consultorios.update',$consultorio)}} ">
@method('PATCH')
    
    @include('consultorios._form',['btnText'=>'Actualizar','btnTextCancel'=>'Cancelar'] )
</form>

@endsection