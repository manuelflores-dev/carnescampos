<?php

namespace App\Http\Controllers;

use App\Models\PagarCuenta;
use App\Models\CobrarCuenta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Recorrido;

class PDFController extends Controller
{
    public function RecorridosPDF($tipo)
    {
        if ($tipo === 'todos') {
            $recorridos = Recorrido::all();
        } elseif ($tipo === 'en-ruta') {
            $recorridos = Recorrido::where('estatus', 'En ruta')->get();
        } elseif ($tipo === 'terminados') {
            $recorridos = Recorrido::where('estatus', 'Terminado')->get();
        } else {
            // Manejar el caso de tipo no válido, redireccionar o mostrar un mensaje de error
            // Por ejemplo:
            return redirect()->back()->with('error', 'Tipo de recorrido no válido');
        }

        $pdf = PDF::loadView('recorrido.partials.pdf', compact('recorridos'));
        // return $pdf->stream('reporte_recorridos_' . $tipo . '.pdf');
        return $pdf->download('reporte_recorridos_' . $tipo . '.pdf');
    }

    public function PagarcuentasPDF($tipo)
    {
        if ($tipo === 'todas') {
            $pagarcuentas = PagarCuenta::all();
        } elseif ($tipo === 'pendientes') {
            $pagarcuentas = PagarCuenta::where('estatus', 'Pendiente')->get();
        } elseif ($tipo === 'pagadas') {
            $pagarcuentas = PagarCuenta::where('estatus', 'Pagada')->get();
        } else {

            return redirect()->back()->with('error', 'Tipo no valido');
        }

        $pdf = PDF::loadView('pagarcuenta.partials.pdf', compact('pagarcuentas'));
        return $pdf->download('reporte_cuentas_por_pagar_' . $tipo . '.pdf');
    }

    public function CobrarcuentasPDF($tipo)
    {
        if ($tipo === 'todas') {
            $cobrarcuentas = CobrarCuenta::all();
        } elseif ($tipo === 'pendientes') {
            $cobrarcuentas = CobrarCuenta::where('estatus', 'Pendiente')->get();
        } elseif ($tipo === 'pagadas') {
            $cobrarcuentas = CobrarCuenta::where('estatus', 'Pagada')->get();
        } else {

            return redirect()->back()->with('error', 'Tipo no valido');
        }

        $pdf = PDF::loadView('cobrarcuenta.partials.pdf', compact('cobrarcuentas'));
        return $pdf->download('reporte_cuentas_por_cobrar_' . $tipo . '.pdf');
    }
}
