<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
     {
     $request->validate([
         'nombre' => 'required|string|max:255',
         'correo' => 'required|email|unique:alumnos',
         'fecha_nacimiento' => 'required|date',
         'ciudad' => 'required|string|max:255',
     ]);
 
     Alumno::create($request->all());
 
     return redirect()->route('alumnos.index')->with('success', 'Alumno creado correctamente');
     }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.edit', compact('alumno'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:alumnos,correo,' . $alumno->id,
            'fecha_nacimiento' => 'required|date',
            'ciudad' => 'required|string|max:255',
        ]);

        $alumno->update($request->all());
        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente');
    }

}
