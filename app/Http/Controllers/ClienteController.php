<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cliente.index', ['clientes' => Cliente::orderBy('created_at', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.partials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {
        Cliente::create($request->validated());
        return to_route('cliente.index')->with('status', 'Cliente agregado');
    }

    /**
     * Display the specified resource.
     */
    public function buscar(Request $request)
    {
        $termino = $request->input('cliente');

        // Realiza la búsqueda en la base de datos
        $resultados = Cliente::where('nombre', 'LIKE', "%$termino%")->get();

        return view('cliente.partials.search', compact('resultados'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente): View
    {
        return view('cliente.edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->validated());
        return to_route('cliente.index')->with('status', 'Cliente actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Cliente $cliente)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $cliente->delete();
        return to_route('cliente.index')->with('status', 'Cliente eliminado');
    }
}
