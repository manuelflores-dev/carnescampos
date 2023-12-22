<?php

namespace App\Http\Controllers;

use App\Models\PagarCuenta;
use App\Models\Proveedor;
use App\Http\Requests\StorePagarCuentaRequest;
use App\Http\Requests\UpdatePagarCuentaRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagarCuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pagarcuenta.index', ['pagarcuentas' => PagarCuenta::with('proveedor')->orderBy('created_at', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pagarcuenta.partials.create', ['proveedors' => Proveedor::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePagarCuentaRequest $request)
    {
        PagarCuenta::create($request->validated());
        return to_route('pagarcuenta.index')->with('status', 'PagarCuenta agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }
    public function buscar(Request $request)
    {
        $termino = $request->input('pagarcuenta');

        $resultados = PagarCuenta::whereHas('proveedor', function ($query) use ($termino) {
            $query->where('nombre', 'LIKE', "%$termino%");
        })->get();

        return view('pagarcuenta.partials.search', compact('resultados'));
    }

    public function proveedorPagarCuentas($id)
    {
        return view('pagarcuenta.partials.proveedor', ['pagarcuentas' => PagarCuenta::where('proveedor_id', $id)->get()]);
        //return PagarCuenta::where('proveedor_id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PagarCuenta $pagarcuenta): View
    {
        return view('pagarcuenta.edit', ['pagarcuenta' => $pagarcuenta]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePagarCuentaRequest $request, PagarCuenta $pagarcuenta)
    {
        $pagarcuenta->update($request->validated());
        return to_route('pagarcuenta.index')->with('status', 'PagarCuenta actualizado');
    }
    public function finalizarCuenta(Request $request, $idPagarcuenta)
    {
        // Obtener el pagarcuenta por su ID
        $pagarcuenta = PagarCuenta::findOrFail($idPagarcuenta);

        // Actualizar los campos del pagarcuenta
        $pagarcuenta->monto_pagado = $request->input('monto_pagado');
        $pagarcuenta->estatus = 'Pagada';
        $pagarcuenta->save();

        return to_route('pagarcuenta.index')->with('status', 'Recorrido actualizado');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, PagarCuenta $pagarcuenta)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $pagarcuenta->delete();
        return to_route('pagarcuenta.index')->with('status', 'PagarCuenta eliminado');
    }
}
