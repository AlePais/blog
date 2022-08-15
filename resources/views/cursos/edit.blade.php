@extends('layouts.plantilla')

@section('title', "Modificando")

@section('content')
    <h1>En esta pagina podras editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="post">
        
        @csrf
        @method('put')

        <label >
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
        <label >
            Descripcion:
            <br>
            <textarea name="description" rows="5">{{$curso->description}}</textarea>
        </label>
        <br>
        <label >
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>
        <input type="submit" value="Enviar formulario">
    </form>
@endsection
