@extends('layout')
@section('title', 'Pagina Principal')
@section('content')
<h1>Pagina Principal</h1>
@auth
<button onclick="window.location.href='{{route('consultas.create')}}'">Crear consulta</button>
{{ auth()->user()->name }}

@endauth

@endsection