@extends('layout')

@section('title','Consulta | ' . $paciente->cnombre)

@section('content')
<div class="container  col-6">
<h2 class="text-base font-semibold leading-7 text-gray-900">Consultando datos del paciente</h2>
</div>

@include('pacientes.datospaciente')



@endsection
