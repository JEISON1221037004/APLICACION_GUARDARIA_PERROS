<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with(['cliente', 'perro', 'empleado'])->get();
        return response()->json($reservas);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|integer|exists:clientes,id',
            'perro_id' => 'required|integer|exists:perros,id',
            'empleado_id' => 'nullable|integer|exists:empleados,id',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'tipo_servicio' => 'required|string|max:255'
        ]);

        $reserva = Reserva::create($validated);
        return response()->json($reserva, 201);
    }

    public function show($id)
    {
        $reserva = Reserva::with(['cliente', 'perro', 'empleado'])->findOrFail($id);
        return response()->json($reserva);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'cliente_id' => 'integer|exists:clientes,id',
            'perro_id' => 'integer|exists:perros,id',
            'empleado_id' => 'nullable|integer|exists:empleados,id',
            'fecha_inicio' => 'date',
            'fecha_fin' => 'date',
            'tipo_servicio' => 'string|max:255'
        ]);

        $reserva = Reserva::findOrFail($id);
        $reserva->update($validated);
        return response()->json($reserva);
    }

    public function destroy($id)
    {
        Reserva::destroy($id);
        return response()->json(null, 204);
    }
}
