@extends('layouts.plantilla')

@section('title', "Cre-An-Do, solo estoy Cre-An-Do")

@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="post">
        @csrf
        <label >
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
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
            <textarea name="description" rows="5">{{old('description')}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria')}}">
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
