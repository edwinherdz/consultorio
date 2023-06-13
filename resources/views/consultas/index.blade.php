@extends('layout')
@section('title', 'Registros de Consultas')
@section('content')
@include('partials.tablaconsultas')


{{ $consultas->links() }}


@endsection