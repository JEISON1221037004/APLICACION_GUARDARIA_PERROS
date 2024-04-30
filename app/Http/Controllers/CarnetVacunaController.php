<?php

namespace App\Http\Controllers;

use App\Models\CarnetVacuna;
use Illuminate\Http\Request;

class CarnetVacunaController extends Controller
{
    public function index()
    {
        $carnets = CarnetVacuna::all();
        return response()->json($carnets);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'perro_id' => 'required|integer|exists:perros,id',
            'vacuna' => 'required|string|max:255',
            'fecha_aplicacion' => 'required|date'
        ]);

        $carnet = CarnetVacuna::create($validated);
        return response()->json($carnet, 201);
    }

    public function show($id)
    {
        $carnet = CarnetVacuna::findOrFail($id);
        return response()->json($carnet);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'vacuna' => 'string|max:255',
            'fecha_aplicacion' => 'date'
        ]);

        $carnet = CarnetVacuna::findOrFail($id);
        $carnet->update($validated);
        return response()->json($carnet);
    }

    public function destroy($id)
    {
        CarnetVacuna::destroy($id);
        return response()->json(null, 204);
    }
}
