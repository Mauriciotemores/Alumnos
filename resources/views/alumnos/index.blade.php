@extends('layouts.app')

@section('title', 'Lista de Alumnos')

@section('content')
    <h1>Lista de Alumnos</h1>
    <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Crear Alumno</a>

    <table class="table mt-3">
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
                        <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

