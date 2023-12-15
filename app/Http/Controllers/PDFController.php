<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Recorrido;

class PDFController extends Controller
{
    public function generarPDF()
    {
        $datos = Recorrido::all(); // Obtén los datos de tu modelo

        $pdf = PDF::loadView('recorrido.partials.pdf', compact('datos'));

        //return $pdf->stream();
        return $pdf->download('recorridos.pdf');
    }
}
