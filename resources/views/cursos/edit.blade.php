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
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <br>
            <small style="color:red">*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label >
            Descripcion:
            <br>
            <textarea name="description" rows="5">{{old('description', $curso->description)}}</textarea>
        </label>
        
        @error('description')
            <br>
            <small style="color:red">*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label >
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>

        @error('categoria')
            <br>
            <small style="color:red">*{{$message}}</small>
            <br>
        @enderror

        <br>
        <input type="submit" value="Enviar formulario">
    </form>
@endsection
