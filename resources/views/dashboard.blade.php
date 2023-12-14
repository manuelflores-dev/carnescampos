<x-app-layout>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Agregar estilos para la vista de dispositivos pequeños */
        @media (max-width: 768px) {
            .flex-wrap {
                display: flex;
                flex-wrap: wrap;
            }

            .section-small {
                width: 50%;
            }
        }
    </style>

    <!--<div class="rounded-md flex flex-col h-screen  bg-gradient-to-r from-gray-50 to-gray-100">-->
    <div class="rounded-md flex flex-col h-screen  bg-secondary-50">


        <!-- Contenido principal -->
        <div class="flex-1 flex">
            <!-- Barra lateral de navegación (oculta en dispositivos pequeños) -->
            <div class="p-2 bg-secondary-100 w-60 flex-col hidden md:flex" id="sideNav">
                <h1 class="text-center text-2xl font-semibold mb-6">Menú</h1>
                <nav>

                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl  hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('empleado.index') }}">
                        <i class="fas fa-person mr-2"></i>Empleados
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('cliente.index') }}">
                        <i class="fas fa-exchange-alt mr-2"></i>Clientes
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl  hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('proveedor.index') }}">
                        <i class="fas fa-user mr-2"></i>Proveedores
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl  hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('vehiculo.index') }}">
                        <i class="fas fa-truck mr-2"></i>Vehículos
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl  hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('mantenimiento.index') }}">
                        <i class="fas fa-truck mr-2"></i>Mantenimientos
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl  hover:bg-gradient-to-r from-red-600 to-red-300 hover:text-white" href="{{ route('recorrido.index') }}">
                        <i class="fas fa-road mr-2"></i>Recorridos
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl  hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('pagarcuenta.index') }}">
                        <i class="fas fa-book mr-2"></i>Cuentas por Pagar
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('cobrarcuenta.index') }}">
                        <i class="fas fa-pay mr-2"></i>Cuentas por cobrar
                    </a>
                </nav>

                <!-- Ítem de Cerrar Sesión -->
                <a class="block text-black py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white mt-auto" href="#">

                </a>

                <!-- Señalador de ubicación -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>

                <!-- Copyright al final de la navegación lateral -->
                <p class="mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright Carnes Campos</p>

            </div>

            <!-- Área de contenido principal -->
            <div class="flex-1 p-4 ">
                <!-- Campo de búsqueda -->
                <h2 class="text-center text-2xl font-semibold mb-4">Indicadores Principales</h2>
                <div class="relative max-w-md w-full">

                </div>

                <div class="mt-12">
                    <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
                        <a href="">
                            <div class="transform  hover:scale-105 transition duration-300 relative flex flex-col bg-clip-border rounded-3xl bg-white text-gray-700 shadow-2xl shadow-blue-600/70">

                                <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-600/70 shadow-xl absolute -mt-4 grid h-16 w-16 place-items-center">
                                    <svg class="w-[32px] h-[32px] fill-[#ffffff]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M32 64C32 28.7 60.7 0 96 0H256c35.3 0 64 28.7 64 64V256h8c48.6 0 88 39.4 88 88v32c0 13.3 10.7 24 24 24s24-10.7 24-24V222c-27.6-7.1-48-32.2-48-62V96L384 64c-8.8-8.8-8.8-23.2 0-32s23.2-8.8 32 0l77.3 77.3c12 12 18.7 28.3 18.7 45.3V168v24 32V376c0 39.8-32.2 72-72 72s-72-32.2-72-72V344c0-22.1-17.9-40-40-40h-8V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64zM96 80v96c0 8.8 7.2 16 16 16H240c8.8 0 16-7.2 16-16V80c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16z"></path>

                                    </svg>
                                </div>

                                <div class="p-4 text-right">
                                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                        Gastos en combustible
                                    </p>
                                    <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                        d
                                    </h4>
                                </div>
                                <div class="border-t border-blue-gray-50 p-4">
                                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <strong class="text-green-500">+0%</strong>&nbsp;En este mes
                                    </p>
                                </div>
                            </div>
                        </a>

                        <div class="transform  hover:scale-105 transition duration-300 relative flex flex-col bg-clip-border rounded-3xl bg-white text-gray-700 shadow-pink-600/70 shadow-2xl">
                            <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-600/70 shadow-xl absolute -mt-4 grid h-16 w-16 place-items-center">
                                <svg class="w-[32px] h-[32px] fill-[#ffffff]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M32 64C32 28.7 60.7 0 96 0H256c35.3 0 64 28.7 64 64V256h8c48.6 0 88 39.4 88 88v32c0 13.3 10.7 24 24 24s24-10.7 24-24V222c-27.6-7.1-48-32.2-48-62V96L384 64c-8.8-8.8-8.8-23.2 0-32s23.2-8.8 32 0l77.3 77.3c12 12 18.7 28.3 18.7 45.3V168v24 32V376c0 39.8-32.2 72-72 72s-72-32.2-72-72V344c0-22.1-17.9-40-40-40h-8V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64zM96 80v96c0 8.8 7.2 16 16 16H240c8.8 0 16-7.2 16-16V80c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16z"></path>

                                </svg>
                            </div>
                            <div class="p-4 text-right">
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                    Gasto en facturas
                                </p>
                                <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">

                                </h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                    <strong class="text-green-500">+0%</strong>&nbsp;en el ultimo mes
                                </p>
                            </div>
                        </div>
                        <div class="transform  hover:scale-105 transition duration-300 relative flex flex-col bg-clip-border rounded-3xl bg-white text-gray-700 shadow-green-600/70 shadow-2xl">
                            <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/70 shadow-xl absolute -mt-4 grid h-16 w-16 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                                    <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                    </path>
                                </svg>
                            </div>
                            <div class="p-4 text-right">
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                    Cuentas por cobrar
                                </p>
                                <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    0</h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                    <strong class="text-red-500">0%</strong>&nbsp;en el último mes
                                </p>
                            </div>
                        </div>
                        <div class="transform  hover:scale-105 transition duration-300 relative flex flex-col bg-clip-border rounded-3xl bg-white text-gray-700 shadow-orange-600/70  shadow-2xl">
                            <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-600/70 shadow-xl absolute -mt-4 grid h-16 w-16 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                                    <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                                    </path>
                                </svg>
                            </div>
                            <div class="p-4 text-right">
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                    Gastos</p>
                                <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    $0</h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                    <strong class="text-green-500">0%</strong>&nbsp;en el ultimo mes
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- Contenedor de las 4 secciones (disminuido para dispositivos pequeños) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2">

                        <!-- Sección 1 - Gráfica de Usuarios (disminuida para dispositivos

                            Sección 1 - Gráfica de Usuarios -->

                        <div class="transform  hover:scale-105 transition duration-300 bg-white p-4 shadow-cyan-600/70 shadow-2xl rounded-3xl">
                            <h2 class="text-black text-lg font-semibold pb-1">Facturas</h2>
                            <div class="my1-"></div> <!-- Espacio de separación -->
                            <div class="bg-gradient-to-r from-red-300 to-cyan-500 h-px  mb-6"></div>
                            <!-- Línea con gradiente -->
                            <div class="chart-container" style="position: relative; height:150px; width:100%">
                                <!-- El canvas para la gráfica -->
                                <canvas id="usersChart"></canvas>
                            </div>
                        </div>

                        <!-- Sección 2 - Gráfica de Comercios -->
                        <div class="transform  hover:scale-105 transition duration-300 bg-white p-4 shadow-yellow-600/70 shadow-2xl rounded-3xl">
                            <h2 class="text-black text-lg font-semibold pb-1">Vehiculos en ruta</h2>
                            <div class="my-1"></div> <!-- Espacio de separación -->
                            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                            <!-- Línea con gradiente -->
                            <div class="chart-container" style="position: relative; height:150px; width:100%">
                                <!-- El canvas para la gráfica -->
                                <canvas id="commercesChart"></canvas>
                            </div>
                        </div>


                        <!-- Sección 3 - Tabla de Autorizaciones Pendientes (disminuida para dispositivos pequeños) -->
                        <div class="transform  hover:scale-105 transition duration-300 bg-white p-4 rounded-3xl  shadow-red-500/70 shadow-lg">
                            <h2 class="text-black text-lg font-semibold pb-4">Facturas</h2>
                            <div class="my-1"></div> <!-- Espacio de separación -->
                            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                            <!-- Línea con gradiente -->
                            <table class="w-full table-auto text-sm">
                                <thead>
                                    <tr class="text-sm leading-normal">
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                        </th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            Proveedor</th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            Factura</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                                        <td class="py-2 px-4 border-b border-grey-light"></td>
                                        <td class="py-2 px-4 border-b border-grey-light"></td>
                                        <td class="px-6 py-4">
                                            <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                Ver factura</a>
                                        </td>
                                    </tr>

                                    <!-- Añade más filas aquí como la anterior para cada autorización pendiente -->
                                </tbody>
                            </table>
                            <!-- Botón "Ver más" para la tabla de Autorizaciones Pendientes -->

                        </div>

                        <!-- Sección 4 - Tabla de Transacciones (disminuida para dispositivos pequeños) -->
                        <!-- Sección 3 - Tabla de Autorizaciones Pendientes (disminuida para dispositivos pequeños) -->
                        <div class="transform  hover:scale-105 transition duration-300 bg-white p-4 rounded-3xl shadow-red-500/70 shadow-lg">
                            <h2 class="text-black text-lg font-semibold pb-4">Vehiculos en recorrido</h2>
                            <div class="my-1"></div> <!-- Espacio de separación -->
                            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                            <!-- Línea con gradiente -->
                            <table class="w-full table-auto text-sm">
                                <thead>
                                    <tr class="text-sm leading-normal">
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                        </th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            Vehículo</th>
                                        <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                                            Conductor</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                                        <td class="py-2 px-4 border-b border-grey-light"></td>
                                        <td class="py-2 px-4 border-b border-grey-light"></td>
                                        <td class="px-6 py-4">
                                            <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar
                                                Finalizar recorrido</a>
                                        </td>
                                    </tr>

                                    <!-- Añade más filas aquí como la anterior para cada autorización pendiente -->
                                </tbody>
                            </table>
                            <!-- Botón "Ver más" para la tabla de Autorizaciones Pendientes -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Script para las gráficas -->
    <script>
        var a = "1";
        var b = "2";
        var d = "3";
        var e = "3";
        // Gráfica de Usuarios
        var usersChart = new Chart(document.getElementById('usersChart'), {
            type: 'doughnut',
            data: {
                labels: ['Pagadas', 'Pendientes'],
                datasets: [{
                    data: [a, b],
                    backgroundColor: ['#00F0FF', '#8B8B8D'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom' // Ubicar la leyenda debajo del círculo
                }
            }
        });

        // Gráfica de Comercios
        var commercesChart = new Chart(document.getElementById('commercesChart'), {

            type: 'doughnut',
            data: {
                labels: ['En ruta', 'Terminado'],
                datasets: [{
                    data: [d, e],
                    backgroundColor: ['#FEC500', '#8B8B8D'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom' // Ubicar la leyenda debajo del círculo
                }
            }
        });

        // Agregar lógica para mostrar/ocultar la navegación lateral al hacer clic en el ícono de menú
        const menuBtn = document.getElementById('menuBtn');
        const sideNav = document.getElementById('sideNav');

        menuBtn.addEventListener('click', () => {
            sideNav.classList.toggle(
                'hidden'); // Agrega o quita la clase 'hidden' para mostrar u ocultar la navegación lateral
        });
    </script>
</x-app-layout>