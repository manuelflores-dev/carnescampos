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
        $datosFacPagar = $this->infoPagarCuentas();
        $datosFacCobrar = $this->infoCobrarCuentas();



        // Asigna los valores a variables separadas
        $costocombustible = $datosRecorridos['costocombustible'];
        $numeroviajes = $datosRecorridos['numeroviajes'];
        $cantidadvr = $datosRecorridos['cantidadvr'];
        $cantidadvnr = $datosRecorridos['cantidadvnr'];

        $gastom = $datosManteniminetos['gastom'];
        $numerom = $datosManteniminetos['numerom'];

        $gastopagar = $datosPagar['gastopagar'];
        $numeropagar = $datosPagar['numeropagar'];

        $gastocobrar = $datosCobrar['gastopagar'];
        $numerocobrar = $datosCobrar['numeropagar'];

        $cantidadpendientes = $datosFacPagar['cantidadpendientes'];
        $cantidadpagadas = $datosFacPagar['cantidadpagadas'];
        $facpp = $datosFacPagar['facpp'];

        $cantidadpendientesc = $datosFacCobrar['cantidadpendientesc'];
        $cantidadpagadasc = $datosFacCobrar['cantidadpagadasc'];
        $facpc = $datosFacCobrar['facpc'];

        // Pasa los datos a la vista 'index'
        //return view('dashboard', compact('costocombustible', 'numeroviajes'));

        return view('dashboard')
            ->with('costocombustible', $costocombustible)
            ->with('numeroviajes', $numeroviajes)
            ->with('cantidadvr', $cantidadvr)
            ->with('cantidadvnr', $cantidadvnr)
            ->with('gastopagar', $gastopagar)
            ->with('numeropagar', $numeropagar)
            ->with('cobrar', $gastocobrar)
            ->with('numerocobrar', $numerocobrar)
            ->with('gastom', $gastom)
            ->with('numerom', $numerom)
            ->with('cp1', $cantidadpagadas)
            ->with('cp2', $cantidadpendientes)
            ->with('cc1', $cantidadpagadasc)
            ->with('cc2', $cantidadpendientesc)
            ->with('facpp', $facpp)
            ->with('facpc ', $facpc);
    }

    public function gastoCombustible()
    {
        $cantidadVr = Recorrido::where('estatus', 'En ruta')->count();
        $cantidadVnr = Recorrido::where('estatus', 'Terminado')->count();

        $fechaHoy = Carbon::now()->toDateString();

        $costocombustible = Recorrido::whereDate('created_at', $fechaHoy)->sum('costo_combustible');
        $numeroviajes = Recorrido::whereDate('created_at', $fechaHoy)->count();
        return [
            'costocombustible' => $costocombustible,
            'numeroviajes' => $numeroviajes,
            'cantidadvr' => $cantidadVr,
            'cantidadvnr' => $cantidadVnr
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

    public function infoPagarCuentas()
    {
        // Obtener todas las facturas
        $facturas = PagarCuenta::all();

        // Contar el número de facturas con estatus "pendiente"
        $cantidadPendientes = PagarCuenta::where('estatus', 'Pendiente')->count();

        // Contar el número de facturas con estatus "pagada"
        $cantidadPagadas = PagarCuenta::where('estatus', 'Pagada')->count();

        return [
            'facpp' => $facturas,
            'cantidadpendientes' => $cantidadPendientes,
            'cantidadpagadas' => $cantidadPagadas,
        ];
    }

    public function infoCobrarCuentas()
    {
        // Obtener todas las facturas
        $facturas = CobrarCuenta::all();

        // Contar el número de facturas con estatus "pendiente"
        $cantidadPendientesc = CobrarCuenta::where('estatus', 'Pendiente')->count();

        // Contar el número de facturas con estatus "pagada"
        $cantidadPagadasc = CobrarCuenta::where('estatus', 'Pagada')->count();

        return [
            'facpc' => $facturas,
            'cantidadpendientesc' => $cantidadPendientesc,
            'cantidadpagadasc' => $cantidadPagadasc,
        ];
    }
}
