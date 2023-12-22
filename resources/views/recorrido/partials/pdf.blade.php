<!-- resources/views/pdf/recorridos.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reporte de Recorridos</title>
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
        <h1>Reporte de Recorridos</h1>
        <table>
            <thead>
                <tr>
                    <th ">
                        Conductor
                    </th>
                    <th ">
                        Vehículo
                    </th>

                    <th ">
                        KM Inincial
                    </th>
                    <th ">
                        KM final
                    </th>
                    <th ">
                        Costo del combustible
                    </th>
                    <th ">
                        Cantidad de combustible
                    </th>

                    <th ">
                        Gasolinera
                    </th>
                    <th ">
                        Estado del recorrido
                    </th>
                    <th ">
                        Fecha
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($recorridos as $recorrido)
                <tr>
                    <th>
                        
                        <div>{{ $recorrido->empleado->nombre }}
                        </div>
                        <div>{{ $recorrido->empleado->area }}
                        </div>
                    </th>
                    <td>
                        <div>
                            <div>{{ $recorrido->vehiculo->marca}}
                            </div>
                            <div>{{ $recorrido->vehiculo->modelo}}
                            </div>

                            <div>{{ $recorrido->vehiculo->placas}}
                            </div>
                        </div>
                    </td>


                    <td>
                        {{ $recorrido->kilometraje_actual}}
                    </td>
                    <td>
                        @if($recorrido->kilometraje_regreso != NULL)
                        {{ $recorrido->kilometraje_regreso}}
                        @endif
                        @if($recorrido->kilometraje_regreso == NULL)
                        <p>Pendiente</p>
                        @endif
                    </td>
                    <td>
                        $ {{ $recorrido->costo_combustible }}
                    </td>
                    <td>
                        @if($recorrido->litros_combustible != NULL)
                        {{ $recorrido->litros_combustible}} Litros
                        @endif
                        @if($recorrido->litros_combustible == NULL)
                        <p>Pendiente</p>
                        @endif
                    </td>

                    <td>
                        @if($recorrido->gasolinera != NULL)
                        {{ $recorrido->gasolinera}}
                        @endif
                        @if($recorrido->gasolinera == NULL)
                        <p>Pendiente</p>
                        @endif
                    </td>


                    <td>
                        <div>
                            {{ $recorrido->estatus }}
                        </div>
                    </td>
                    <td>
                        {{ $recorrido->vehiculo->created_at}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>