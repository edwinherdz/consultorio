@extends('layout')

@section('title','Perfil | ' . auth()->user()->name)

@section('content')

@include('partials.validation-errors')


@livewire('user-list')

@endsection