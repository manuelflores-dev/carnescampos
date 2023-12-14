<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Http\Requests\StoreVehiculoRequest;
use App\Http\Requests\UpdateVehiculoRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vehiculo.index', ['vehiculos' => Vehiculo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehiculo.partials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehiculoRequest $request)
    {
        Vehiculo::create($request->validated());
        return to_route('vehiculo.index')->with('status', 'Vehiculo Agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
        return view('vehiculo.show', ['vehiculo' => $vehiculo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculo $vehiculo): View
    {
        return view('vehiculo.edit', ['vehiculo' => $vehiculo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehiculoRequest $request, Vehiculo $vehiculo)
    {
        $vehiculo->update($request->validated());
        return to_route('vehiculo.index')->with('status', 'Vehiculo actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Vehiculo $vehiculo)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $vehiculo->delete();
        return to_route('vehiculo.index')->with('status', 'Vehiculo eliminado');
    }
}