<!-- resources/views/pdf/recorridos.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reporte de cuentas por pagar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .rotate-table {
            transform: rotate(-90deg);
            transform-origin: left top 0;
            width: 100vh;
            position: absolute;
            top: 100%;
            left: 0;
        }

        .rotate-table table {
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .rotate-table th,
        .rotate-table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }

        .rotate-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <div class="rotate-table">
        <h1>Reporte de cuentas por pagar</h1>
        <table>
            <thead>
                <tr>
                    <th>
                        Proveedor
                    </th>
                    <th>
                        Número de factura
                    </th>
                    <th>
                        Fecha de emisión
                    </th>
                    <th>
                        Fecha de vencimiento
                    </th>
                    <th>
                        Monto total
                    </th>

                    <th>
                        Monto pagado
                    </th>
                    <th>
                        Detalles adicionales
                    </th>
                    <th>
                        Estatus
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($cobrarcuentas as $recorrido)
                <tr>
                    <th>

                        <div>{{ $recorrido->cliente->nombre}}
                        </div>
                        <div>{{ $recorrido->cliente->rfc}}
                        </div>
                    </th>

                    <td>
                        {{ $recorrido->numero_factura}}
                    </td>
                    <td>
                        {{ $recorrido->fecha_emision}}
                    </td>
                    <td>
                        {{ $recorrido->fecha_vencimiento}}
                    </td>
                    <td>
                        {{ $recorrido->monto_total}}
                    </td>
                    <td>
                        {{ $recorrido->monto_pagado}}
                    </td>
                    <td>
                        {{ $recorrido->detalles_adicionales}}
                    </td>
                    <td>
                        <div>
                            {{ $recorrido->estatus }}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>