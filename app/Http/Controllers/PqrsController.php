<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;

class PqrsController extends Controller
{
    public function index()
    {
        $pqrss = Pqrs::all();
        return response()->json($pqrss);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|integer|exists:clientes,id',
            'tipo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha' => 'required|date'
        ]);

        $pqrs = Pqrs::create($validated);
        return response()->json($pqrs, 201);
    }

    public function show($id)
    {
        $pqrs = Pqrs::findOrFail($id);
        return response()->json($pqrs);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tipo' => 'string|max:255',
            'descripcion' => 'string',
            'fecha' => 'date'
        ]);

        $pqrs = Pqrs::findOrFail($id);
        $pqrs->update($validated);
        return response()->json($pqrs);
    }

    public function destroy($id)
    {
        Pqrs::destroy($id);
        return response()->json(null, 204);
    }
}
