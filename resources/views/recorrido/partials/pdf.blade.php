<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
</head>

<body>
    <h1>Información para el PDF</h1>


    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                    Conductor
                </th>
                <th scope="col" class="px-6 py-3">
                    Vehículo
                </th>
                <th scope="col" class="px-6 py-3">
                    Serie
                </th>
                <th scope="col" class="px-6 py-3">
                    Placas
                </th>
                <th scope="col" class="px-6 py-3">
                    Cantidad de combustible
                </th>
                <th scope="col" class="px-6 py-3">
                    Costo del combustible
                </th>
                <th scope="col" class="px-6 py-3">
                    Gasolinera
                </th>
                <th scope="col" class="px-6 py-3">
                    Estado del recorrido
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $recorrido)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>

                    <div class="pl-3">
                        <div class="text-base font-semibold">{{ $recorrido->empleado->nombre }}
                        </div>
                        <div class="font-normal text-gray-500">{{ $recorrido->empleado->area }}
                        </div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    <div class="pl-3">
                        <div class="text-base font-semibold">{{ $recorrido->vehiculo->marca}}
                        </div>
                        <div class="font-normal text-gray-500">{{ $recorrido->vehiculo->modelo}}
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    {{ $recorrido->vehiculo->serie }}
                </td>
                <td class="px-6 py-4">
                    {{ $recorrido->vehiculo->placas}}
                </td>
                <td class="px-6 py-4">
                    {{ $recorrido->litros_combustible }} Litros
                </td>
                <td class="px-6 py-4">
                    $ {{ $recorrido->costo_combustible }}
                </td>
                <td class="px-6 py-4">
                    {{ $recorrido->gasolinera }}
                </td>


                <td class="px-6 py-4">
                    <div class="flex items-center">
                        @if($recorrido->estatus== "Disponible")
                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                        @endif
                        @if($recorrido->estatus== "En ruta")
                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                        @endif
                        {{ $recorrido->estatus }}
                    </div>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>