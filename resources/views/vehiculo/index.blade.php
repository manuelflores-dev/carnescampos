<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M64 32C28.7 32 0 60.7 0 96V304v80 16c0 44.2 35.8 80 80 80c26.2 0 49.4-12.6 64-32c14.6 19.4 37.8 32 64 32c44.2 0 80-35.8 80-80c0-5.5-.6-10.8-1.6-16H416h33.6c-1 5.2-1.6 10.5-1.6 16c0 44.2 35.8 80 80 80s80-35.8 80-80c0-5.5-.6-10.8-1.6-16H608c17.7 0 32-14.3 32-32V288 272 261.7c0-9.2-3.2-18.2-9-25.3l-58.8-71.8c-10.6-13-26.5-20.5-43.3-20.5H480V96c0-35.3-28.7-64-64-64H64zM585 256H480V192h48.8c2.4 0 4.7 1.1 6.2 2.9L585 256zM528 368a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM176 400a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM80 368a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>

                </svg>
                <span class="ml-3 text-2xl">Vehículos</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('dashboard')}}">Regresar</a>
                <a class="mr-5 hover:text-red-600" href="{{route('vehiculo.create')}}">Agregar vehículo</a>
                <a class="mr-5 hover:text-red-600" href="{{route('mantenimiento.create')}}">Agregar mantenimiento a un vehiculo</a>
            </nav>
            <form action="{{ route('buscar.vehiculo') }}" method="GET">
                <x-text-input id="vehiculo" name="vehiculo" type="text" autofocus placeholder="Buscar por nombre" />
                <button type="submit">Buscar</button>
            </form>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-3xl shadow-red-600/30">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col text-center w-full mb-10">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Vehículos registrados</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Seleciona un vehículo para ver en detalle, actualizarlo o eliminarlo.</p>
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
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="p-4">

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
                                                Kilometraje
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Estado
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Accion
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vehiculos as $vehiculo)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <svg class="w-[34px] h-[34px] fill-[#ff7070]" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">

                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>

                                                </svg>

                                            </td>
                                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="pl-3">
                                                    <div class="text-base font-semibold">{{ $vehiculo->marca }}
                                                    </div>
                                                    <div class="font-normal text-gray-500">{{ $vehiculo->modelo }}
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $vehiculo->serie }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $vehiculo->placas }}
                                            </td>

                                            <td class="px-6 py-4">
                                                {{ $vehiculo->kilometros }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    @if($vehiculo->estatus== "Disponible")
                                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                                    @endif
                                                    @if($vehiculo->estatus== "No disponible")
                                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                                    @endif
                                                    {{ $vehiculo->estatus }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="vehiculo/{{ $vehiculo->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    Detalles</a>
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
                                    @foreach ($vehiculos as $vehiculo)
                                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                                        <a href="vehiculo/{{ $vehiculo->id }}">
                                            <div class="h-full flex items-center border-gray-200 border p-4 transform  hover:scale-105 transition duration-300 relative bg-clip-border rounded-3xl bg-white text-gray-700 shadow-2xl shadow-blue-600/30">
                                                <div class="w-16 h-16 mr-4">
                                                    <svg class="w-[61px] h-[61px] fill-[#ff7070]" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">

                                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>

                                                    </svg>
                                                </div>

                                                <div class="flex-grow">
                                                    <h2 class="text-gray-900 title-font font-medium">{{$vehiculo->marca}} {{$vehiculo->modelo}} {{$vehiculo->year}}</h2>
                                                    <p class="text-gray-500">Placas: {{$vehiculo->placas}} Serie: {{$vehiculo->serie}}</p>
                                                    <p class="text-gray-500">
                                                    <div class="flex items-center">
                                                        @if($vehiculo->estatus== "Disponible")
                                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                                        @endif
                                                        @if($vehiculo->estatus== "No disponible")
                                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                                        @endif
                                                        {{ $vehiculo->estatus }}
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