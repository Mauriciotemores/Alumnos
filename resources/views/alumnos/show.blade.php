@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #7FFFD4; /* Aqua Marina */
        color: #0000FF; /* Azul */
        text-align: center;
    }
    h1, h2 {
        color: #0000FF; /* Azul */
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;
    }
    .table-container {
        width: 80%;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .btn {
        border-radius: 20px;
        padding: 8px 15px;
        text-align: center;
        border: none;
        cursor: pointer;
    }
    .btn-info {
        background-color: #17a2b8;
        color: white;
    }
    .btn-success {
        background-color: #28a745;
        color: white;
    }
    .btn-container {
        display: flex;
        justify-content: center;
        gap: 10px; /* Espacio entre botones */
    }
    .btn-container form {
        margin: 0;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-control {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
</style>
<h1>Detalles del Alumno</h1>
<p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
<p><strong>Correo:</strong> {{ $alumno->correo }}</p>
<p><strong>Fecha de nacimiento:</strong> {{ $alumno->fecha_nacimiento }}</p>
<p><strong>Ciudad:</strong> {{ $alumno->ciudad }}</p>
<a href="{{ route('alumnos.index') }}" class="btn btn-info">Volver a la lista</a>
@endsection
