@extends('layout')

@section('title','Consultorio | ' . $estudio->cnombre)

@section('content')

@include('estudiosmedicos.barraherramientas')

<button><a href="{{route('estudios.edit',$estudio)}}">Editar Estudio Médico</a></button>

<form action="POST">

    @include('estudiosmedicos._form',['btnText'=>'Actualizar','btnTextCancel'=>'Cancelar'] )

</form>

@endsection
