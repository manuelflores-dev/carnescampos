<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[46px] h-[46px] fill-[#db1a1a]" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"></path>
                </svg>
                <span class="ml-3 text-2xl">Mantenimientos</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="javascript:void(0);" onclick="history.back();">Regresar</a>
                <a class=" mr-5 hover:text-red-600" href="{{route('mantenimiento.create')}}">Agregar mantenimiento</a>

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


                                            </tbody>
                                </table>

                            </div>
                        </section>
                    </div>

                    <div id="employeeCards" class="">

                        <section class="text-gray-600 body-font">
                            <div class="container px-5 mx-auto">
                                <div class="flex flex-wrap -m-2">
                                    @foreach ($mantenimientos as $reco)
                                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                                        <a href="{{ route('mantenimiento.update', ['mantenimiento' => $reco->id])}}">
                                            <div class="h-full flex items-center border-gray-200 border p-4 transform  hover:scale-105 transition duration-300 relative bg-clip-border rounded-3xl bg-white text-gray-700 shadow-md">
                                                <div class="flex-grow">
                                                    <h2 class="text-lg text-center  font-semibold mb-2">Mantenimiento {{$reco->id}}</h2>
                                                    <h2 class="text-gray-900 title-font font-medium">{{$reco->vehiculo->marca}}</h2>
                                                    <p class="text-gray-500">{{$reco->vehiculo->modelo}} {{$reco->vehiculo->year}} {{$reco->vehiculo->placas}} {{$reco->vehiculo->serie}}</p>
                                                    <div class=" p-3 rounded-2xl mt-4">
                                                        <h3 class="text-md font-semibold mb-1">Información del mantenimiento</h3>
                                                        <p class="text-gray-600 mb-2">Fecha de mantenimiento: {{$reco->fecha_mantenimiento}}</p>
                                                        <p class="text-gray-600 mb-2">Tipo de mantenimiento: {{$reco->tipo_mantenimiento}}</p>
                                                        <p class="text-gray-600 mb-2">Costo: {{$reco->costo_mantenimiento}}</p>
                                                        <p class="text-gray-600 mb-2">Kilometraje: {{$reco->kilometraje}}</p>

                                                        <!-- Agrega más detalles si es necesario -->
                                                    </div>
                                                    <div class="bg-gray-100 p-3 rounded-2xl mt-4">
                                                        <h3 class="text-md font-semibold mb-1">Detalles del mantenimiento </h3>
                                                        <p class="text-gray-600 mb-2">{{$reco->detalle_mantenimiento}}</p>

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