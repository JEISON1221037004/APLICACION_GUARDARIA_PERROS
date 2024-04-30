<?php

namespace App\Http\Controllers;

use App\Models\SoporteTecnico;
use Illuminate\Http\Request;

class SoporteTecnicoController extends Controller
{
    public function index()
    {
        $soportes = SoporteTecnico::all();
        return response()->json($soportes);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'empleado_id' => 'nullable|integer|exists:empleados,id',
            'descripcion' => 'required|string',
            'fecha_solicitud' => 'required|date',
            'estado' => 'required|string|max:255'
        ]);

        $soporte = SoporteTecnico::create($validated);
        return response()->json($soporte, 201);
    }

    public function show($id)
    {
        $soporte = SoporteTecnico::findOrFail($id);
        return response()->json($soporte);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'descripcion' => 'string',
            'fecha_solicitud' => 'date',
            'estado' => 'string|max:255'
        ]);

        $soporte = SoporteTecnico::findOrFail($id);
        $soporte->update($validated);
        return response()->json($soporte);
    }

    public function destroy($id)
    {
        SoporteTecnico::destroy($id);
        return response()->json(null, 204);
    }
}
