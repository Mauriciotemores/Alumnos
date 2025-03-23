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

    <h1>Crear Alumno</h1>
    <div class="container">
        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label>Correo:</label>
                <input type="email" name="correo" class="form-control">
            </div>
            <div class="form-group">
                <label>Fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" class="form-control">
            </div>
            <div class="form-group">
                <label>Ciudad:</label>
                <input type="text" name="ciudad" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('alumnos.index') }}" class="btn btn-info">Volver a la lista</a>
        </form>
    </div>
@endsection

