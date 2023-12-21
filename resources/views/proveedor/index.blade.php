<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">

                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M80 48a48 48 0 1 1 96 0A48 48 0 1 1 80 48zm64 193.7v65.1l51 51c7.1 7.1 11.8 16.2 13.4 26.1l15.2 90.9c2.9 17.4-8.9 33.9-26.3 36.8s-33.9-8.9-36.8-26.3l-14.3-85.9L66.8 320C54.8 308 48 291.7 48 274.7V186.6c0-32.4 26.2-58.6 58.6-58.6c24.1 0 46.5 12 59.9 32l47.4 71.1 10.1 5V160c0-17.7 14.3-32 32-32H384c17.7 0 32 14.3 32 32v76.2l10.1-5L473.5 160c13.3-20 35.8-32 59.9-32c32.4 0 58.6 26.2 58.6 58.6v88.1c0 17-6.7 33.3-18.7 45.3l-79.4 79.4-14.3 85.9c-2.9 17.4-19.4 29.2-36.8 26.3s-29.2-19.4-26.3-36.8l15.2-90.9c1.6-9.9 6.3-19 13.4-26.1l51-51V241.7l-19 28.5c-4.6 7-11 12.6-18.5 16.3l-59.6 29.8c-2.4 1.3-4.9 2.2-7.6 2.8c-2.6 .6-5.3 .9-7.9 .8H256.7c-2.5 .1-5-.2-7.5-.7c-2.9-.6-5.6-1.6-8.1-3l-59.5-29.8c-7.5-3.7-13.8-9.4-18.5-16.3l-19-28.5zM2.3 468.1L50.1 348.6l49.2 49.2-37.6 94c-6.6 16.4-25.2 24.4-41.6 17.8S-4.3 484.5 2.3 468.1zM512 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm77.9 348.6l47.8 119.5c6.6 16.4-1.4 35-17.8 41.6s-35-1.4-41.6-17.8l-37.6-94 49.2-49.2z"></path>

            </svg>
            <span class="ml-3 text-2xl">Proveedores</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('dashboard')}}">Regresar</a>
                <a class="mr-5 hover:text-red-600" href="{{route('proveedor.create')}}">Agregar proveedor</a>
            </nav>
            <form action="{{ route('buscar.proveedor') }}" method="GET">
                <x-text-input id="proveedor" name="proveedor" type="text" autofocus placeholder="Buscar por nombre" />
                <button type="submit">Buscar</button>
            </form>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-3xl shadow-red-600/30">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col text-center w-full mb-10">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Proveedores registrados</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Seleciona un proveedor para ver en detalle, actualizarlo o eliminarlo.</p>
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
                                        @foreach ($proveedors as $proveedor)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                                <svg class="w-[34px] h-[34px] fill-[#ff7070]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">

                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M0 96l576 0c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96zm0 32V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128H0zM64 405.3c0-29.5 23.9-53.3 53.3-53.3H234.7c29.5 0 53.3 23.9 53.3 53.3c0 5.9-4.8 10.7-10.7 10.7H74.7c-5.9 0-10.7-4.8-10.7-10.7zM176 192a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm176 16c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16z"></path>

                                                </svg>


                                                <div class="pl-3">
                                                    <div class="text-base font-semibold">{{$proveedor->nombre}}</div>
                                                    <!-- <div class="font-normal text-gray-500">{{$proveedor->area}}</div>-->
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                {{$proveedor->rfc}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$proveedor->telefono}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$proveedor->correo}}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    <div></div> {{$proveedor->direccion}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="proveedor/{{ $proveedor->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar
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
                                    @foreach ($proveedors as $proveedor)
                                    <div class="p-2 lg:w-1/4 md:w-1/2 w-full">
                                        <a href="proveedor/{{ $proveedor->id }}">
                                            <div class="h-full flex items-center border-gray-200 border p-4 transform  hover:scale-105 transition duration-300 relative bg-clip-border rounded-3xl bg-white text-gray-700 shadow-2xl shadow-blue-600/30">
                                                <div class="w-16 h-16 mr-4">
                                                    <svg class="w-[65px] h-[65px] fill-[#ff7070]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">

                                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path d="M0 96l576 0c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96zm0 32V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128H0zM64 405.3c0-29.5 23.9-53.3 53.3-53.3H234.7c29.5 0 53.3 23.9 53.3 53.3c0 5.9-4.8 10.7-10.7 10.7H74.7c-5.9 0-10.7-4.8-10.7-10.7zM176 192a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm176 16c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16z"></path>

                                                    </svg>
                                                </div>
                                                <div class="flex-grow">
                                                    <h2 class="text-gray-900 title-font font-medium">{{$proveedor->nombre}}</h2>
                                                    <p class="text-gray-500">{{$proveedor->rfc}}</p>
                                                    <p class="text-gray-500">{{$proveedor->correo}}</p>
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