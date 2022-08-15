@extends('layouts.plantilla')

@section('title', "Fucking " . $curso->name)

@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
    <br>
    <p><strong>Categoria {{$curso->categoria}}</strong></p>
    <p>{{$curso->description}}</p>

@endsection


