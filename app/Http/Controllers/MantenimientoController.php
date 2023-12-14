<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use App\Models\Vehiculo;
use App\Http\Requests\StoreMantenimientoRequest;
use App\Http\Requests\UpdateMantenimientoRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mantenimiento.index', ['mantenimientos' => Mantenimiento::with('vehiculo')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mantenimiento.partials.create', ['vehiculos' => Vehiculo::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMantenimientoRequest $request)
    {
        Mantenimiento::create($request->validated());
        return to_route('mantenimiento.index')->with('status', 'Mantenimiento agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    public function vehiculoMantenimientos($id)
    {
        return view('mantenimiento.partials.vehiculo', ['mantenimientos' => Mantenimiento::where('vehiculo_id', $id)->get()]);
        //return Mantenimiento::where('vehiculo_id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mantenimiento $mantenimiento): View
    {
        return view('mantenimiento.edit', ['mantenimiento' => $mantenimiento]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMantenimientoRequest $request, Mantenimiento $mantenimiento)
    {
        $mantenimiento->update($request->validated());
        return to_route('mantenimiento.index')->with('status', 'Mantenimiento actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Mantenimiento $mantenimiento)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $mantenimiento->delete();
        return to_route('mantenimiento.index')->with('status', 'Mantenimiento eliminado');
    }
}
