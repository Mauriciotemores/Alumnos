@extends('layouts.app')

@section('content')
<h1>Crear Alumno</h1>
<form action="{{ route('alumnos.store') }}" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre">
    <label>Correo:</label>
    <input type="email" name="correo">
    <label>Fecha de nacimiento:</label>
    <input type="date" name="fecha_nacimiento">
    <label>Ciudad:</label>
    <input type="text" name="ciudad">
    <button type="submit">Guardar</button>
</form>
@endsection
