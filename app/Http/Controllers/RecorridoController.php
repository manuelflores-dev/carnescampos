<?php

namespace App\Http\Controllers;

use App\Models\Recorrido;
use App\Models\Empleado;
use App\Models\Vehiculo;
use App\Http\Requests\StoreRecorridoRequest;
use App\Http\Requests\UpdateRecorridoRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RecorridoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recorrido.index', ['recorridos' => Recorrido::with('empleado', 'vehiculo')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recorrido.partials.create', ['empleados' => Empleado::get()], ['vehiculos' => Vehiculo::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecorridoRequest $request)
    {

        Recorrido::create($request->validated());

        $vehiculo = Vehiculo::find($request->vehiculo_id);
        $vehiculo->estatus = 'No disponible';
        $vehiculo->save();

        $empleado = Empleado::find($request->empleado_id);
        $empleado->estatus = 'No disponible';
        $empleado->save();

        return to_route('recorrido.index')->with('status', 'Nuevo recorrido agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }
    public function buscar(Request $request)
    {
        $termino = $request->input('recorrido');

        $resultados = Recorrido::whereHas('vehiculo', function ($query) use ($termino) {
            $query->where('marca', 'LIKE', "%$termino%");
        })->get();

        return view('recorrido.partials.search', compact('resultados'));
    }
    public function empleadoRecorridos($id)
    {
        return view('recorrido.partials.empleado', ['recorridos' => Recorrido::where('empleado_id', $id)->get()]);
        //return Recorrido::where('empleado_id', $id)->get();
    }

    public function vehiculoRecorridos($id)
    {
        return view('recorrido.partials.vehiculo', ['recorridos' => Recorrido::where('vehiculo_id', $id)->get()]);
        //return Recorrido::where('vehiculo_id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recorrido $recorrido): View
    {
        return view('recorrido.edit', ['recorrido' => $recorrido]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecorridoRequest $request, Recorrido $recorrido)
    {
        $recorrido->update($request->validated());
        return to_route('recorrido.index')->with('status', 'Recorrido actualizado');
    }

    public function finalizarRecorrido(Request $request, $idRecorrido)
    {
        // Obtener el recorrido por su ID
        $recorrido = Recorrido::findOrFail($idRecorrido);

        // Actualizar los campos del recorrido
        $recorrido->kilometraje_regreso = $request->input('kilometraje_regreso');
        $recorrido->gasolinera = $request->input('gasolinera');
        $recorrido->litros_combustible = $request->input('cantidad_combustible');
        $recorrido->estatus = 'Disponible';
        $recorrido->save();

        // Obtener el vehículo relacionado con este recorrido
        $vehiculo = $recorrido->vehiculo;

        // Actualizar el campo 'estatus' del vehículo
        $vehiculo->estatus = 'Disponible';
        $vehiculo->save();

        // Obtener el empleado relacionado con este recorrido
        $empleado = $recorrido->empleado;

        // Actualizar el campo 'estatus' del empleado
        $empleado->estatus = 'Disponible';
        $empleado->save();

        // Redireccionar o devolver la respuesta necesaria
        // ...
        return to_route('recorrido.index')->with('status', 'Recorrido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Recorrido $recorrido)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $recorrido->delete();
        return to_route('recorrido.index')->with('status', 'Recorrido eliminado');
    }
}
