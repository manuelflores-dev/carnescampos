<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"></path>

                </svg>
                <span class="ml-3 text-2xl">Clientes</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('dashboard')}}">Regresar</a>
                <a class="mr-5 hover:text-red-600" href="{{route('cliente.create')}}">Agregar cliente</a>
            </nav>
            <form action="{{ route('buscar.cliente') }}" method="GET">
                <x-text-input id="nombre" name="cliente" type="text" class="" :value="old('nombre')" autofocus autocomplete="nombre" placeholder="Buscar por nombre" />
                <button type="submit">Buscar</button>
            </form>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-3xl shadow-red-600/30">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col text-center w-full mb-10">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Clientes registrados</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Seleciona un cliente para ver en detalle, actualizarlo o eliminarlo.</p>

                        <!-- HTML en una vista de Blade en Laravel -->
                        <div class="flex items-center justify-center mt-8 ">
                            <!-- Checkbox con color rojo -->
                            <div class="flex items-center space-x-2">
                                <input id="toggle" type="checkbox" class="h-5 w-5 rounded focus:ring-red-500 text-red-600 border-red-300 shadow-sm focus:border-red-300 focus:ring focus:ring-opacity-50" />
                                <label for="redCheckbox" class="font-medium text-gray-700">Mostrar en tabla</label>
                            </div>
                        </div>

                    </div>
                    <!-- resultado_busqueda.blade.php -->
                    @if ($resultados->isEmpty())
                    <p>No se encontraron resultados.</p>
                    @else
                    <div id="employeeTable" class="hidden">
                        <section>
                            <div class="relative overflow-x-auto shadow-md sm:rounded-3xl">

                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>

                                            <th scope="col" class="px-6 py-3">
                                                Nombre
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                RFC
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Teléfono
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Correo
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Dirección
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Accion
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($resultados as $cliente)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                                <svg class="w-[34px] h-[34px] fill-[#ff7070]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">

                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M0 96l576 0c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96zm0 32V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128H0zM64 405.3c0-29.5 23.9-53.3 53.3-53.3H234.7c29.5 0 53.3 23.9 53.3 53.3c0 5.9-4.8 10.7-10.7 10.7H74.7c-5.9 0-10.7-4.8-10.7-10.7zM176 192a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm176 16c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16z"></path>

                                                </svg>


                                                <div class="pl-3">
                                                    <div class="text-base font-semibold">{{$cliente->nombre}}</div>
                                                    <!-- <div class="font-normal text-gray-500">{{$cliente->area}}</div>-->
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                {{$cliente->rfc}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$cliente->telefono}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$cliente->correo}}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <div></div> {{$cliente->direccion}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="cliente/{{ $cliente->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar
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
                                    @foreach ($resultados as $cliente)
                                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                                        <a href="cliente/{{ $cliente->id }}">
                                            <div class="h-full flex items-center border-gray-200 border p-4 transform  hover:scale-105 transition duration-300 relative bg-clip-border rounded-3xl bg-white text-gray-700 shadow-md">
                                                <div class="w-16 h-16 mr-4">
                                                    <svg class="w-[65px] h-[65px] fill-[#ff7070]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">

                                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path d="M0 96l576 0c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96zm0 32V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128H0zM64 405.3c0-29.5 23.9-53.3 53.3-53.3H234.7c29.5 0 53.3 23.9 53.3 53.3c0 5.9-4.8 10.7-10.7 10.7H74.7c-5.9 0-10.7-4.8-10.7-10.7zM176 192a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm176 16c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16z"></path>

                                                    </svg>
                                                </div>
                                                <div class="flex-grow">
                                                    <h2 class="text-gray-900 title-font font-medium">{{$cliente->nombre}}</h2>
                                                    <p class="text-gray-500">{{$cliente->rfc}}</p>
                                                    <p class="text-gray-500">{{$cliente->correo}}</p>
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>