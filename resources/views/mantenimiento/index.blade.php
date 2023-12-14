<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"></path>

                </svg>
                <span class="ml-3 text-2xl">Mantenimientos de vehículos</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('dashboard')}}">Regresar</a>
                <a class="mr-5 hover:text-red-600" href="{{route('mantenimiento.create')}}">Agregar mantenimiento</a>
            </nav>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-3xl">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col text-center w-full mb-10">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Mantenimientos registrados</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Seleciona un mantenimiento para ver en detalle, actualizarlo o eliminarlo.</p>
                        <!-- HTML en una vista de Blade en Laravel -->
                        <div class="flex items-center justify-center mt-8 ">
                            <!-- Checkbox con color rojo -->
                            <div class="flex items-center space-x-2">
                                <input id="toggle" type="checkbox" class="h-5 w-5 rounded focus:ring-red-500 text-red-600 border-red-300 shadow-sm focus:border-red-300 focus:ring focus:ring-opacity-50" />
                                <label for="redCheckbox" class="font-medium text-gray-700">Cambiar vista</label>
                            </div>
                        </div>
                    </div>

                    <div id="employeeTable" class="">
                        <section>
                            <div class="relative overflow-x-auto shadow-md sm:rounded-3xl">

                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="p-4">

                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Vehiculo
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Serie
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Placas
                                            </th>

                                            <th scope="col" class="px-6 py-3">
                                                Fecha mantenimiento
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Tipo de mantenimiento
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Detalle de mantenimiento
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Costo de mantenimiento
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Kilometraje
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Accion
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mantenimientos as $mantenimiento)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <svg class="w-[34px] h-[34px] fill-[#ff7070]" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">

                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>

                                                </svg>

                                            </td>
                                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="pl-3">
                                                    <div class="text-base font-semibold">{{ $mantenimiento->vehiculo->marca }}
                                                    </div>
                                                    <div class="font-normal text-gray-500">{{ $mantenimiento->vehiculo->modelo }}
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $mantenimiento->vehiculo->serie }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $mantenimiento->vehiculo->placas }}
                                            </td>

                                            <td class="px-6 py-4">
                                                {{ $mantenimiento->fecha_mantenimiento }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $mantenimiento->tipo_mantenimiento }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $mantenimiento->detalle_mantenimiento }}
                                            </td>
                                            <td class="px-6 py-4">
                                                $ {{ $mantenimiento->costo_mantenimiento }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $mantenimiento->kilometraje}} km
                                            </td>


                                            <td class="px-6 py-4">
                                                <a href="mantenimiento/{{ $mantenimiento->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    Detalles</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </section>
                    </div>

                    <div id="employeeCards" class="hidden">

                        <section class="text-gray-600 body-font">
                            <div class="container px-5 mx-auto">
                                <div class="flex flex-wrap -m-2">
                                    @foreach ($mantenimientos as $mantenimiento)
                                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                                        <a href="mantenimiento/{{ $mantenimiento->id }}">
                                            <div class="h-full flex items-center border-gray-200 border p-4 transform  hover:scale-105 transition duration-300 relative bg-clip-border rounded-3xl bg-white text-gray-700 shadow-md">
                                                <div class="w-16 h-16 mr-4">
                                                    <svg class="w-[61px] h-[61px] fill-[#ff7070]" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">

                                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>

                                                    </svg>
                                                </div>

                                                <div class="flex-grow">
                                                    <h2 class="text-gray-900 title-font font-medium">{{$mantenimiento->marca}}</h2>
                                                    <p class="text-gray-500">{{$mantenimiento->placas}}</p>
                                                    <p class="text-gray-500">
                                                    <div class="flex items-center">
                                                        @if($mantenimiento->estatus== "Disponible")
                                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                                        @endif
                                                        @if($mantenimiento->estatus== "No disponible")
                                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                                        @endif
                                                        {{ $mantenimiento->estatus }}
                                                    </div>
                                                    </p>
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