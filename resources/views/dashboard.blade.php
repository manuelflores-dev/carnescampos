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
                <h1 class="text-center text-2xl font-semibold mb-6 ">Menú</h1>
                <nav>

                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl  hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('empleado.index') }}">
                        <i class="fas fa-users mr-2"></i>Empleados
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('cliente.index') }}">
                        <i class="fas  mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                            </svg>
                        </i>Clientes
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl  hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('proveedor.index') }}">
                        <i class="fas  mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                            </svg>
                        </i>Proveedores
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl  hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('vehiculo.index') }}">
                        <i class="fas mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 116 0h3a.75.75 0 00.75-.75V15z" />
                                <path d="M8.25 19.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0zM15.75 6.75a.75.75 0 00-.75.75v11.25c0 .087.015.17.042.248a3 3 0 015.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 00-3.732-10.104 1.837 1.837 0 00-1.47-.725H15.75z" />
                                <path d="M19.5 19.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                            </svg>
                        </i>Vehículos
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl  hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('mantenimiento.index') }}">
                        <i class="fas fa-mantenice mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 016.775-5.025.75.75 0 01.313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 011.248.313 5.25 5.25 0 01-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 112.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0112 6.75zM4.117 19.125a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z" clip-rule="evenodd" />
                                <path d="M10.076 8.64l-2.201-2.2V4.874a.75.75 0 00-.364-.643l-3.75-2.25a.75.75 0 00-.916.113l-.75.75a.75.75 0 00-.113.916l2.25 3.75a.75.75 0 00.643.364h1.564l2.062 2.062 1.575-1.297z" />
                                <path fill-rule="evenodd" d="M12.556 17.329l4.183 4.182a3.375 3.375 0 004.773-4.773l-3.306-3.305a6.803 6.803 0 01-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 00-.167.063l-3.086 3.748zm3.414-1.36a.75.75 0 011.06 0l1.875 1.876a.75.75 0 11-1.06 1.06L15.97 17.03a.75.75 0 010-1.06z" clip-rule="evenodd" />
                            </svg>
                        </i>Mantenimientos
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl  hover:bg-gradient-to-r from-red-600 to-red-300 hover:text-white" href="{{ route('recorrido.index') }}">
                        <i class="fas fa-road mr-2"></i>Recorridos
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl  hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('pagarcuenta.index') }}">
                        <i class="fas mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </i>Cuentas por Pagar
                    </a>
                    <a class="transform  hover:scale-105 transition duration-200 block text-black py-2.5 px-4 my-4 rounded-xl hover:bg-gradient-to-r hover:from-red-600 hover:to-red-300 hover:text-white" href="{{ route('cobrarcuenta.index') }}">
                        <i class="fas  mr-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </i>Cuentas por cobrar
                    </a>
                </nav>

                <!-- Ítem de Cerrar Sesión -->
                <a class="block text-black py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-400 hover:to-cyan-300 hover:text-white mt-auto" href="#">

                </a>

                <!-- Señalador de ubicación -->
                <div class="bg-gradient-to-r from-red-300 to-red-500 h-px mt-2"></div>

                <!-- Copyright al final de la navegación lateral -->
                <p class="mb-1 px-5 py-3 text-left text-xs text-red-500">Copyright Carnes Campos</p>

            </div>

            <!-- Área de contenido principal -->
            <div class="flex-1 p-4 ">
                <!-- Campo de búsqueda -->

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
                                        Gastos en combustible (Hoy)
                                    </p>
                                    <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                        $ {{$costocombustible}}
                                    </h4>
                                </div>
                                <div class="border-t border-blue-gray-50 p-4">
                                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <strong class="text-blue-500">{{$numeroviajes}}</strong>&nbsp;Numero de viajes
                                    </p>
                                </div>
                            </div>
                        </a>

                        <div class="transform  hover:scale-105 transition duration-300 relative flex flex-col bg-clip-border rounded-3xl bg-white text-gray-700 shadow-pink-600/70 shadow-2xl">
                            <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-600/70 shadow-xl absolute -mt-4 grid h-16 w-16 place-items-center">
                                <svg class="w-[50px] h-[50px] fill-[#ffffff]" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">

                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 80c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm128 72c8.8 0 16 7.2 16 16v17.3c8.5 1.2 16.7 3.1 24.1 5.1c8.5 2.3 13.6 11 11.3 19.6s-11 13.6-19.6 11.3c-11.1-3-22-5.2-32.1-5.3c-8.4-.1-17.4 1.8-23.6 5.5c-5.7 3.4-8.1 7.3-8.1 12.8c0 3.7 1.3 6.5 7.3 10.1c6.9 4.1 16.6 7.1 29.2 10.9l.5 .1 0 0 0 0c11.3 3.4 25.3 7.6 36.3 14.6c12.1 7.6 22.4 19.7 22.7 38.2c.3 19.3-9.6 33.3-22.9 41.6c-7.7 4.8-16.4 7.6-25.1 9.1V440c0 8.8-7.2 16-16 16s-16-7.2-16-16V422.2c-11.2-2.1-21.7-5.7-30.9-8.9l0 0c-2.1-.7-4.2-1.4-6.2-2.1c-8.4-2.8-12.9-11.9-10.1-20.2s11.9-12.9 20.2-10.1c2.5 .8 4.8 1.6 7.1 2.4l0 0 0 0 0 0c13.6 4.6 24.6 8.4 36.3 8.7c9.1 .3 17.9-1.7 23.7-5.3c5.1-3.2 7.9-7.3 7.8-14c-.1-4.6-1.8-7.8-7.7-11.6c-6.8-4.3-16.5-7.4-29-11.2l-1.6-.5 0 0c-11-3.3-24.3-7.3-34.8-13.7c-12-7.2-22.6-18.9-22.7-37.3c-.1-19.4 10.8-32.8 23.8-40.5c7.5-4.4 15.8-7.2 24.1-8.7V232c0-8.8 7.2-16 16-16z"></path>

                                </svg>
                            </div>
                            <div class="p-4 text-right">
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                    Cuentas por pagar
                                </p>
                                <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    $ {{$gastopagar}}
                                </h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                    <strong class="text-pink-500">{{$numeropagar}}</strong>&nbsp;Pendientes
                                </p>
                            </div>
                        </div>
                        <div class="transform  hover:scale-105 transition duration-300 relative flex flex-col bg-clip-border rounded-3xl bg-white text-gray-700 shadow-green-600/70 shadow-2xl">
                            <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/70 shadow-xl absolute -mt-4 grid h-16 w-16 place-items-center">
                                <svg class="w-[50px] h-[50px] fill-[#ffffff]" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">

                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 80c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm128 72c8.8 0 16 7.2 16 16v17.3c8.5 1.2 16.7 3.1 24.1 5.1c8.5 2.3 13.6 11 11.3 19.6s-11 13.6-19.6 11.3c-11.1-3-22-5.2-32.1-5.3c-8.4-.1-17.4 1.8-23.6 5.5c-5.7 3.4-8.1 7.3-8.1 12.8c0 3.7 1.3 6.5 7.3 10.1c6.9 4.1 16.6 7.1 29.2 10.9l.5 .1 0 0 0 0c11.3 3.4 25.3 7.6 36.3 14.6c12.1 7.6 22.4 19.7 22.7 38.2c.3 19.3-9.6 33.3-22.9 41.6c-7.7 4.8-16.4 7.6-25.1 9.1V440c0 8.8-7.2 16-16 16s-16-7.2-16-16V422.2c-11.2-2.1-21.7-5.7-30.9-8.9l0 0c-2.1-.7-4.2-1.4-6.2-2.1c-8.4-2.8-12.9-11.9-10.1-20.2s11.9-12.9 20.2-10.1c2.5 .8 4.8 1.6 7.1 2.4l0 0 0 0 0 0c13.6 4.6 24.6 8.4 36.3 8.7c9.1 .3 17.9-1.7 23.7-5.3c5.1-3.2 7.9-7.3 7.8-14c-.1-4.6-1.8-7.8-7.7-11.6c-6.8-4.3-16.5-7.4-29-11.2l-1.6-.5 0 0c-11-3.3-24.3-7.3-34.8-13.7c-12-7.2-22.6-18.9-22.7-37.3c-.1-19.4 10.8-32.8 23.8-40.5c7.5-4.4 15.8-7.2 24.1-8.7V232c0-8.8 7.2-16 16-16z"></path>

                                </svg>
                            </div>
                            <div class="p-4 text-right">
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                    Cuentas por cobrar
                                </p>
                                <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    $ {{$cobrar}}
                                </h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                    <strong class="text-green-500">{{$numerocobrar}}</strong>&nbsp;Pendientes
                                </p>
                            </div>
                        </div>
                        <div class="transform  hover:scale-105 transition duration-300 relative flex flex-col bg-clip-border rounded-3xl bg-white text-gray-700 shadow-orange-600/70  shadow-2xl">
                            <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-600/70 shadow-xl absolute -mt-4 grid h-16 w-16 place-items-center">
                                <svg class="w-[50px] h-[50px] fill-[#ffffff]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"></path>

                                </svg>
                            </div>
                            <div class="p-4 text-right">
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                                    Gastos en mantenimientos</p>
                                <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    $ {{$gastom}}</h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                    <strong class="text-orange-500">{{$numerom}}</strong>&nbsp;en el ultimo mes
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- Contenedor de las 4 secciones (disminuido para dispositivos pequeños) -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-2 p-2">
                        <!-- Sección 2 - Gráfica de Comercios -->
                        <div class="transform  hover:scale-105 transition duration-300 bg-white p-4 shadow-2xl shadow-blue-600/70 rounded-3xl">
                            <h2 class="text-black text-lg font-semibold pb-1">Recorrido de vehículos de hoy</h2>
                            <div class="my-1"></div> <!-- Espacio de separación -->
                            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                            <!-- Línea con gradiente -->
                            <div class="chart-container" style="position: relative; height:150px; width:100%">
                                <!-- El canvas para la gráfica -->
                                <canvas id="commercesChart2"></canvas>
                            </div>
                        </div>
                        <!-- Sección 1 - Gráfica de Usuarios (disminuida para dispositivos

                            Sección 1 - Gráfica de Usuarios -->

                        <div class="transform  hover:scale-105 transition duration-300 bg-white p-4 shadow-pink-600/70 shadow-2xl rounded-3xl">
                            <h2 class="text-black text-lg font-semibold pb-1">Facturas de cuentas por pagar</h2>
                            <div class="my1-"></div> <!-- Espacio de separación -->
                            <div class="bg-gradient-to-r from-red-300 to-red-600 h-px  mb-6"></div>
                            <!-- Línea con gradiente -->
                            <div class="chart-container" style="position: relative; height:150px; width:100%">
                                <!-- El canvas para la gráfica -->
                                <canvas id="usersChart"></canvas>
                            </div>
                        </div>

                        <!-- Sección 2 - Gráfica de Comercios -->
                        <div class="transform  hover:scale-105 transition duration-300 bg-white p-4 shadow-green-600/70 shadow-2xl rounded-3xl">
                            <h2 class="text-black text-lg font-semibold pb-1">Facturas de cuentas por cobrar</h2>
                            <div class="my-1"></div> <!-- Espacio de separación -->
                            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                            <!-- Línea con gradiente -->
                            <div class="chart-container" style="position: relative; height:150px; width:100%">
                                <!-- El canvas para la gráfica -->
                                <canvas id="commercesChart"></canvas>
                            </div>
                        </div>


                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2">

                        <div class="relative overflow-x-auto  sm:rounded-3xl bg-white p-4 rounded-3xl shadow-red-500/70 shadow-lg">
                            <!-- Sección 3 - Tabla de Autorizaciones Pendientes (disminuida para dispositivos pequeños) -->
                            <div>
                                <h2 class="text-black text-lg font-semibold pb-4">Vehículos en recorrido pendientes en Finalizar</h2>
                                <div class="my-1"></div> <!-- Espacio de separación -->
                                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                                <!-- Línea con gradiente -->
                                <div>
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
                                                    Fecha
                                                </th>
                                                <th scope="col" class="px-6 py-3">

                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($recorridos as $recorrido)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">


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

                                                        <div class="font-normal text-gray-500">{{ $recorrido->vehiculo->placas}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $recorrido->vehiculo->created_at}}
                                                </td>
                                                <td>
                                                    <a href="recorrido/{{ $recorrido->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Finalizar
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Botón "Ver más" para la tabla de Autorizaciones Pendientes -->

                            </div>
                        </div>

                        <div class="relative overflow-x-auto  sm:rounded-3xl bg-white p-4 rounded-3xl shadow-red-500/70 shadow-lg">
                            <!-- Sección 3 - Tabla de Autorizaciones Pendientes (disminuida para dispositivos pequeños) -->
                            <div>
                                <h2 class="text-black text-lg font-semibold pb-4">Facturas de cuentas por cobrar pendientes en Finalizar</h2>
                                <div class="my-1"></div> <!-- Espacio de separación -->
                                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                                <!-- Línea con gradiente -->
                                <div>
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>

                                                <th scope="col" class="px-6 py-3">
                                                    Proveedor
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Monto
                                                </th>

                                                <th scope="col" class="px-6 py-3">
                                                    Fecha de vencimiento
                                                </th>
                                                <th scope="col" class="px-6 py-3">

                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($finalizarpc as $recorrido)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">


                                                    <div class="pl-3">
                                                        <div class="text-base font-semibold">{{ $recorrido->proveedor->nombre}}
                                                        </div>
                                                        <div class="font-normal text-gray-500">{{ $recorrido->proveedor->rfc}}
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $recorrido->monto_total}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $recorrido->fecha_vencimiento}}
                                                </td>
                                                <td>
                                                    <a href="pagarcuenta/{{ $recorrido->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Finalizar
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Botón "Ver más" para la tabla de Autorizaciones Pendientes -->

                            </div>
                        </div>

                        <div class="relative overflow-x-auto  sm:rounded-3xl bg-white p-4 rounded-3xl shadow-red-500/70 shadow-lg">
                            <!-- Sección 3 - Tabla de Autorizaciones Pendientes (disminuida para dispositivos pequeños) -->
                            <div>
                                <h2 class="text-black text-lg font-semibold pb-4">Finalizar facturas de cuentas por cobrar pendientes</h2>
                                <div class="my-1"></div> <!-- Espacio de separación -->
                                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                                <!-- Línea con gradiente -->
                                <div>
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>

                                                <th scope="col" class="px-6 py-3">
                                                    Cliente
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Monto
                                                </th>

                                                <th scope="col" class="px-6 py-3">
                                                    Fecha de vencimiento
                                                </th>
                                                <th scope="col" class="px-6 py-3">

                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($finalizarcc as $recorrido)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">


                                                    <div class="pl-3">
                                                        <div class="text-base font-semibold">{{ $recorrido->cliente->nombre}}
                                                        </div>
                                                        <div class="font-normal text-gray-500">{{ $recorrido->cliente->rfc}}
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $recorrido->monto_total}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $recorrido->fecha_vencimiento}}
                                                </td>
                                                <td>
                                                    <a href="pagarcuenta/{{ $recorrido->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Finalizar
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Botón "Ver más" para la tabla de Autorizaciones Pendientes -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Script para las gráficas -->
    <script>
        var a = "{{$cp1}}";
        var b = "{{$cp2}}";
        var d = "{{$cc1}}";
        var e = "{{$cc2}}";
        var f = "{{$cantidadvr}}";
        var g = "{{$cantidadvnr}}";
        // Gráfica de facturas por pagar
        var usersChart = new Chart(document.getElementById('usersChart'), {
            type: 'doughnut',
            data: {
                labels: ['Pagadas', 'Pendientes'],
                datasets: [{
                    data: [a, b],
                    backgroundColor: ['#D42A46', '#8B8B8D'],
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
                labels: ['Cobrada', 'Pendiente'],
                datasets: [{
                    data: [d, e],
                    backgroundColor: ['#118C42', '#8B8B8D'],
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
        // Gráfica de vehiculos
        var commercesChart = new Chart(document.getElementById('commercesChart2'), {

            type: 'doughnut',
            data: {
                labels: ['Recorrido terminado', 'En recorrido'],
                datasets: [{
                    data: [g, f],
                    backgroundColor: ['#274bce', '#8B8B8D'],
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