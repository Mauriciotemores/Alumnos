@extends('layouts.app')

@section('content')
<h1>Editar Alumno</h1>
<form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $alumno->nombre }}">
    
    <label>Correo:</label>
    <input type="email" name="correo" value="{{ $alumno->correo }}">

    <label>Fecha de nacimiento:</label>
    <input type="date" name="fecha_nacimiento" value="{{ $alumno->fecha_nacimiento }}">

    <label>Ciudad:</label>
    <input type="text" name="ciudad" value="{{ $alumno->ciudad }}">

    <button type="submit">Actualizar</button>
</form>
@endsection
