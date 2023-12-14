<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Proveedor;
use App\Http\Requests\StoreFacturaRequest;
use App\Http\Requests\UpdateFacturaRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('factura.index', ['facturas' => Factura::with('proveedor')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('factura.partials.create', ['proveedors' => Proveedor::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFacturaRequest $request)
    {
        Factura::create($request->validated());
        return to_route('factura.index')->with('status', 'Factura agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    public function proveedorFacturas($id)
    {
        return view('factura.partials.proveedor', ['facturas' => Factura::where('proveedor_id', $id)->get()]);
        //return Factura::where('proveedor_id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factura $factura): View
    {
        return view('factura.edit', ['factura' => $factura]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacturaRequest $request, Factura $factura)
    {
        $factura->update($request->validated());
        return to_route('factura.index')->with('status', 'Factura actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Factura $factura)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $factura->delete();
        return to_route('factura.index')->with('status', 'Factura eliminado');
    }
}
