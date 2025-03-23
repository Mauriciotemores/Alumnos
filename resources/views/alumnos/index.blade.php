@extends('layouts.app')

@section('title', 'Lista de Alumnos')

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
        .btn-warning {
            background-color: #ffc107;
            color: black;
        }
        .btn-danger {
            background-color: #dc3545;
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
    </style>

    <div class="container">
        <h1>Escuela Mauricio Temores</h1>
        <h2>Lista de Alumnos</h2>
        <a href="{{ route('alumnos.create') }}" class="btn btn-success">Crear Alumno</a>

        <div class="table-container mt-4">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Ciudad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnos as $alumno)
                        <tr>
                            <td>{{ $alumno->id }}</td>
                            <td>{{ $alumno->nombre }}</td>
                            <td>{{ $alumno->correo }}</td>
                            <td>{{ $alumno->fecha_nacimiento->format('Y-m-d') }}</td>
                            <td>{{ $alumno->ciudad }}</td>
                            <td>
                                <div class="btn-container">
                                    <form action="{{ route('alumnos.show', $alumno->id) }}" method="GET">
                                        <button type="submit" class="btn btn-info">Ver</button>
                                    </form>
                                    <form action="{{ route('alumnos.edit', $alumno->id) }}" method="GET">
                                        <button type="submit" class="btn btn-warning">Editar</button>
                                    </form>
                                    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
