<?php

namespace App\Http\Controllers;

use App\Models\CobrarCuenta;
use App\Models\Cliente;
use App\Http\Requests\StoreCobrarCuentaRequest;
use App\Http\Requests\UpdateCobrarCuentaRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CobrarCuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cobrarcuenta.index', ['cobrarcuentas' => CobrarCuenta::with('cliente')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cobrarcuenta.partials.create', ['clientes' => Cliente::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCobrarCuentaRequest $request)
    {
        CobrarCuenta::create($request->validated());
        return to_route('cobrarcuenta.index')->with('status', 'CobrarCuenta agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    public function buscar(Request $request)
    {
        $termino = $request->input('cobrarcuenta');

        $resultados = CobrarCuenta::whereHas('cliente', function ($query) use ($termino) {
            $query->where('nombre', 'LIKE', "%$termino%");
        })->get();

        return view('cobrarcuenta.partials.search', compact('resultados'));
    }

    public function clienteCobrarCuentas($id)
    {
        return view('cobrarcuenta.partials.cliente', ['cobrarcuentas' => CobrarCuenta::where('cliente_id', $id)->get()]);
        //return CobrarCuenta::where('cliente_id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CobrarCuenta $cobrarcuenta): View
    {
        return view('cobrarcuenta.edit', ['cobrarcuenta' => $cobrarcuenta]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCobrarCuentaRequest $request, CobrarCuenta $cobrarcuenta)
    {
        $cobrarcuenta->update($request->validated());
        return to_route('cobrarcuenta.index')->with('status', 'CobrarCuenta actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, CobrarCuenta $cobrarcuenta)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $cobrarcuenta->delete();
        return to_route('cobrarcuenta.index')->with('status', 'CobrarCuenta eliminado');
    }
}
