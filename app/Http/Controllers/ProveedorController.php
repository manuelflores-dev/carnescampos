<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Http\Requests\StoreProveedorRequest;
use App\Http\Requests\UpdateProveedorRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('proveedor.index', ['proveedors' => Proveedor::orderBy('created_at', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedor.partials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProveedorRequest $request)
    {
        Proveedor::create($request->validated());
        return to_route('proveedor.index')->with('status', 'Proveedor agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        return view('proveedor.show', ['proveedor' => $proveedor]);
    }
    public function buscar(Request $request)
    {
        $termino = $request->input('proveedor');

        // Realiza la búsqueda en la base de datos
        $resultados = Proveedor::where('nombre', 'LIKE', "%$termino%")->get();

        return view('proveedor.partials.search', compact('resultados'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor): View
    {
        return view('proveedor.edit', ['proveedor' => $proveedor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProveedorRequest $request, Proveedor $proveedor)
    {
        $proveedor->update($request->validated());
        return to_route('proveedor.index')->with('status', 'Proveedor actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Proveedor $proveedor)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $proveedor->delete();
        return to_route('proveedor.index')->with('status', 'Proveedor eliminado');
    }
}
