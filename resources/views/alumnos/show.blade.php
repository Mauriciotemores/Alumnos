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
        gap: 10px; 
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
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    .table th, .table td {
        border: 1px solid #000;
        padding: 10px;
        text-align: left;
    }
    .table th {
        background-color: #f2f2f2;
    }
</style>

<h1>Detalles del Alumno</h1>
<div class="table-container">
    <table class="table">
        <tr>
            <th>Nombre</th>
            <td>{{ $alumno->nombre }}</td>
        </tr>
        <tr>
            <th>Correo</th>
            <td>{{ $alumno->correo }}</td>
        </tr>
        <tr>
            <th>Fecha de nacimiento</th>
            <td>{{ $alumno->fecha_nacimiento }}</td>
        </tr>
        <tr>
            <th>Ciudad</th>
            <td>{{ $alumno->ciudad }}</td>
        </tr>
    </table>
</div>

<a href="{{ route('alumnos.index') }}" class="btn btn-info">Volver a la lista</a>
@endsection
