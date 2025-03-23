@extends('layouts.app')

@section('content')
<h1>Detalles del Alumno</h1>
<p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
<p><strong>Correo:</strong> {{ $alumno->correo }}</p>
<p><strong>Fecha de nacimiento:</strong> {{ $alumno->fecha_nacimiento }}</p>
<p><strong>Ciudad:</strong> {{ $alumno->ciudad }}</p>
<a href="{{ route('alumnos.index') }}">Volver</a>
@endsection
