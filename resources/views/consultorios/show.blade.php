@extends('layout')

@section('title','Consultorio | ' . $consultorio->cnombreconsultorio)

@section('content')

{{-- @include('consultas.barraherramientas') --}}

<button><a href="{{route('consultorios.edit',$consultorio)}}">Editar Consultorio</a></button>

@empty($consultorio)
<span>Consultorio no creado, favor de crearlo</span>
@else
<form action="POST">

    @include('consultorios._form',['btnText'=>'Actualizar','btnTextCancel'=>'Cancelar'] )

</form>
@endempty




@endsection
