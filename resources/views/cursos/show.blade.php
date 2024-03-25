@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso)

@section('content')
    <h1>Bienvenido a la pagina {{$curso}}</h1>
@endsection
