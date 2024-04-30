<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'email' => 'required|string|email|unique:clientes,email',
            'direccion' => 'required|string'
        ]);

        $cliente = Cliente::create($validated);
        return response()->json($cliente, 201);
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return response()->json($cliente);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'string|max:255',
            'telefono' => 'string|max:255',
            'email' => 'string|email|unique:clientes,email,' . $id,
            'direccion' => 'string'
        ]);

        $cliente = Cliente::findOrFail($id);
        $cliente->update($validated);
        return response()->json($cliente);
    }

    public function destroy($id)
    {
        Cliente::destroy($id);
        return response()->json(null, 204);
    }
}
