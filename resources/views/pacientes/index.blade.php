@extends('layout')
@section('title', 'Registros de Pacientes')
@section('content')
@include('partials.tablapacientes')

{{ $pacientes->links() }}

@endsection