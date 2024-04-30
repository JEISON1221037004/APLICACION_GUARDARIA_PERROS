<?php

namespace App\Http\Controllers;

use App\Models\FacturacionPago;
use Illuminate\Http\Request;

class FacturacionPagoController extends Controller
{
    public function index()
    {
        $pagos = FacturacionPago::all();
        return response()->json($pagos);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'reserva_id' => 'required|integer|exists:reservas,id',
            'monto' => 'required|numeric',
            'fecha' => 'required|date'
        ]);

        $pago = FacturacionPago::create($validated);
        return response()->json($pago, 201);
    }

    public function show($id)
    {
        $pago = FacturacionPago::findOrFail($id);
        return response()->json($pago);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'monto' => 'numeric',
            'fecha' => 'date'
        ]);

        $pago = FacturacionPago::findOrFail($id);
        $pago->update($validated);
        return response()->json($pago);
    }

    public function destroy($id)
    {
        FacturacionPago::destroy($id);
        return response()->json(null, 204);
    }
}
