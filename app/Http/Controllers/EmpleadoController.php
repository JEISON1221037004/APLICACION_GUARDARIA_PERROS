<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return response()->json($empleados);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'email' => 'required|string|email|unique:empleados,email',
            'fecha_contratacion' => 'required|date',
            'salario' => 'required|numeric'
        ]);

        $empleado = Empleado::create($validated);
        return response()->json($empleado, 201);
    }

    public function show($id)
    {
        $empleado = Empleado::findOrFail($id);
        return response()->json($empleado);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'string|max:255',
            'cargo' => 'string|max:255',
            'telefono' => 'string|max:255',
            'email' => 'string|email|unique:empleados,email,' . $id,
            'fecha_contratacion' => 'date',
            'salario' => 'numeric'
        ]);

        $empleado = Empleado::findOrFail($id);
        $empleado->update($validated);
        return response()->json($empleado);
    }

    public function destroy($id)
    {
        Empleado::destroy($id);
        return response()->json(null, 204);
    }
}
