<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M256 32H181.2c-27.1 0-51.3 17.1-60.3 42.6L3.1 407.2C1.1 413 0 419.2 0 425.4C0 455.5 24.5 480 54.6 480H256V416c0-17.7 14.3-32 32-32s32 14.3 32 32v64H521.4c30.2 0 54.6-24.5 54.6-54.6c0-6.2-1.1-12.4-3.1-18.2L455.1 74.6C446 49.1 421.9 32 394.8 32H320V96c0 17.7-14.3 32-32 32s-32-14.3-32-32V32zm64 192v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V224c0-17.7 14.3-32 32-32s32 14.3 32 32z"></path>

                </svg>
                <span class="ml-3 text-2xl">Recorridos</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="javascript:void(0);" onclick="history.back();">Regresar</a>
                <a class=" mr-5 hover:text-red-600" href="{{route('recorrido.create')}}">Agregar recorrido</a>
                <a class="mr-5 hover:text-red-600" href="{{route('recorrido.create')}}">Recorridos por vehiculo</a>
                <a class=" mr-5 hover:text-red-600">Recorridos por empleado</a>
            </nav>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-3xl">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col text-center w-full mb-10">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Empleados registrados</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-red-500">Seleciona un empleado para ver en detalle, actualizarlo o eliminarlo.</p>
                        <!-- HTML en una vista de Blade en Laravel -->
                        <div class="flex items-center justify-center mt-8 ">
                            <!-- Checkbox con color rojo -->
                            <div class="flex items-center space-x-2">
                                <input id="toggle" type="checkbox" class="h-5 w-5 rounded focus:ring-red-500 text-red-600 border-red-300 shadow-sm focus:border-red-300 focus:ring focus:ring-opacity-50" />
                                <label for="redCheckbox" class="font-medium text-gray-700">Mostrar en tabla</label>
                            </div>
                        </div>
                    </div>

                    <div id="employeeTable" class="hidden">
                        <section>
                            <div class="relative overflow-x-auto shadow-md sm:rounded-3xl">

                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>

                                            <th scope="col" class="px-6 py-3">
                                                Nombre
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Contacto
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Dirección
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Estatus
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Detalles
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recorridos as $reco)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>

                                                <div class="pl-3">
                                                    <div class="text-base font-semibold">{{ $reco->vehiculo->marca }}
                                                    </div>
                                                    <div class="font-normal text-gray-500">{{ $reco->vehiculo->modelo }}
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $reco->empleado->telefono }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $reco->empleado->direccion }}
                                            </td>

                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    @if($reco->estatus== "Disponible")
                                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                                    @endif
                                                    @if($reco->estatus== "No disponible")
                                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                                    @endif
                                                    {{ $reco->estatus }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </section>
                    </div>

                    <div id="employeeCards" class="">

                        <section class="text-gray-600 body-font">
                            <div class="container px-5 mx-auto">
                                <div class="flex flex-wrap -m-2">
                                    @foreach ($recorridos as $reco)
                                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                                        <a href="{{ route('recorrido.update', ['recorrido' => $reco->id])}}">
                                            <div class="h-full flex items-center border-gray-200 border p-4 transform  hover:scale-105 transition duration-300 relative bg-clip-border rounded-3xl bg-white text-gray-700 shadow-md">
                                                <div class="flex-grow">
                                                    <h2 class="text-lg text-center  font-semibold mb-2">Recorrido {{$reco->id}}</h2>
                                                    <h2 class="text-gray-900 title-font font-medium">{{$reco->vehiculo->marca}}</h2>
                                                    <p class="text-gray-500">{{$reco->vehiculo->modelo}}</p>
                                                    <div class=" p-3 rounded-2xl mt-4">
                                                        <h3 class="text-md font-semibold mb-1">Detalles del recorrido</h3>
                                                        <p class="text-gray-600 mb-2">Kilometraje: {{$reco->kilometraje_actual}}</p>
                                                        <p class="text-gray-600 mb-2">Kilometraje: {{$reco->kilometraje_regreso}}</p>
                                                        <p class="text-gray-600 mb-2">Combustible: {{$reco->litros_combustible}}</p>
                                                        <p class="text-gray-600 mb-2">Costo: {{$reco->costo_combustible}}</p>
                                                        <p class="text-gray-600 mb-2">Gasolinera: {{$reco->gasolinera}}</p>
                                                        <div class="flex items-center">
                                                            @if($reco->empleado->estatus== "Disponible")
                                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                                            @endif
                                                            @if($reco->estatus== "No disponible")
                                                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                                            @endif
                                                            {{ $reco->estatus }}
                                                        </div>
                                                        <!-- Agrega más detalles si es necesario -->
                                                    </div>
                                                    <div class="bg-gray-100 p-3 rounded-2xl mt-4">
                                                        <h3 class="text-md font-semibold mb-1">Detalles del conductor</h3>
                                                        <p class="text-gray-600 mb-2">Nombre: {{$reco->empleado->nombre}}</p>
                                                        <p class="text-gray-600 mb-2">Area: {{$reco->empleado->area}}</p>
                                                        <p class="text-gray-600 mb-2">Telefono: {{$reco->empleado->telefono}}</p>

                                                        <!-- Agrega más detalles si es necesario -->
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $("#toggle").on("change", function() {
                                if ($(this).is(":checked")) {
                                    // Si el switch está encendido, mostrar la tabla y ocultar las cards
                                    $("#employeeTable").removeClass("hidden");
                                    $("#employeeCards").addClass("hidden");
                                } else {
                                    // Si el switch está apagado, mostrar las cards y ocultar la tabla
                                    $("#employeeTable").addClass("hidden");
                                    $("#employeeCards").removeClass("hidden");
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>