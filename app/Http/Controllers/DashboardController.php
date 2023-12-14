<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Empleado;
use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Vehiculo;
use App\Models\Mantenimiento;
use App\Models\Recorrido;
use App\Models\PagarCuenta;
use App\Models\CobrarCuenta;


class DashboardController extends Controller
{
    public function index()
    {
        // Llama a la función obtenerDatos() para obtener los datos
        $datosRecorridos = $this->gastoCombustible();
        $datosManteniminetos = $this->gastoMantenimientos();
        $datosPagar = $this->gastoCuentasPagar();
        $datosCobrar = $this->gastoCuentasCobrar();

        // Asigna los valores a variables separadas
        $costocombustible = $datosRecorridos['costocombustible'];
        $numeroviajes = $datosRecorridos['numeroviajes'];

        $gastom = $datosManteniminetos['gastom'];
        $numerom = $datosManteniminetos['numerom'];

        $gastopagar = $datosPagar['gastopagar'];
        $numeropagar = $datosPagar['numeropagar'];

        $gastocobrar = $datosCobrar['gastopagar'];
        $numerocobrar = $datosCobrar['numeropagar'];

        // Pasa los datos a la vista 'index'
        //return view('dashboard', compact('costocombustible', 'numeroviajes'));

        return view('dashboard')
            ->with('costocombustible', $costocombustible)
            ->with('numeroviajes', $numeroviajes)
            ->with('gastopagar', $gastopagar)
            ->with('numeropagar', $numeropagar)
            ->with('cobrar', $gastocobrar)
            ->with('numerocobrar', $numerocobrar)
            ->with('gastom', $gastom)
            ->with('numerom', $numerom);
    }

    public function gastoCombustible()
    {
        $fechaHoy = Carbon::now()->toDateString();
        $costocombustible = Recorrido::whereDate('created_at', $fechaHoy)->sum('costo_combustible');
        $numeroviajes = Recorrido::whereDate('created_at', $fechaHoy)->count();
        return [
            'costocombustible' => $costocombustible,
            'numeroviajes' => $numeroviajes,
        ];
    }

    public function gastoMantenimientos()
    {
        // Obtener la fecha de hace un mes y la fecha actual
        $fechaActual = Carbon::now();
        $fechaMesPasado = Carbon::now()->subMonth();

        // Consulta para obtener el total de gastos en mantenimientos del último mes
        $totalGastosUltimoMes = Mantenimiento::whereBetween('created_at', [$fechaMesPasado, $fechaActual])
            ->sum('costo_mantenimiento');

        // Consulta para obtener el número de mantenimientos realizados el último mes
        $numeroMantenimientosUltimoMes = Mantenimiento::whereBetween('created_at', [$fechaMesPasado, $fechaActual])
            ->count();
        return [
            'gastom' => $totalGastosUltimoMes,
            'numerom' => $numeroMantenimientosUltimoMes,
        ];
    }

    public function gastoCuentasPagar()
    {

        $gastopagar = PagarCuenta::where('estatus', 'Pendiente')->sum('monto_total');
        $numeropagar = PagarCuenta::where('estatus', 'Pendiente')->count();
        return [
            'gastopagar' => $gastopagar,
            'numeropagar' => $numeropagar,
        ];
    }

    public function gastoCuentasCobrar()
    {

        $gastopagar = CobrarCuenta::where('estatus', 'Pendiente')->sum('monto_total');
        $numeropagar = CobrarCuenta::where('estatus', 'Pendiente')->count();
        return [
            'gastopagar' => $gastopagar,
            'numeropagar' => $numeropagar,
        ];
    }
}
