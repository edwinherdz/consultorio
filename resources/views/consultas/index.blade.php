@extends('layout')
@section('title', 'Registros de Consultas')
@section('content')
 {{-- @include('partials.tablaconsultas')  --}}

{{-- <livewire:consultas-list></livewire:consultas-list> --}}


@livewire('consultas-list')

@endsection