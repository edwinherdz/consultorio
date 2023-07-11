@extends('layout')

@section('title','Consulta | ' . $consulta->paciente->cnombre ." ". $consulta->paciente->cprimerapellido." ". $consulta->paciente->csegundoapellido)

@section('content')

@include('consultas.barraherramientas')

@include('consultas.showdatosconsulta')


@endsection
