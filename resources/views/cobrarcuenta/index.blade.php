<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 80c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm128 72c8.8 0 16 7.2 16 16v17.3c8.5 1.2 16.7 3.1 24.1 5.1c8.5 2.3 13.6 11 11.3 19.6s-11 13.6-19.6 11.3c-11.1-3-22-5.2-32.1-5.3c-8.4-.1-17.4 1.8-23.6 5.5c-5.7 3.4-8.1 7.3-8.1 12.8c0 3.7 1.3 6.5 7.3 10.1c6.9 4.1 16.6 7.1 29.2 10.9l.5 .1 0 0 0 0c11.3 3.4 25.3 7.6 36.3 14.6c12.1 7.6 22.4 19.7 22.7 38.2c.3 19.3-9.6 33.3-22.9 41.6c-7.7 4.8-16.4 7.6-25.1 9.1V440c0 8.8-7.2 16-16 16s-16-7.2-16-16V422.2c-11.2-2.1-21.7-5.7-30.9-8.9l0 0c-2.1-.7-4.2-1.4-6.2-2.1c-8.4-2.8-12.9-11.9-10.1-20.2s11.9-12.9 20.2-10.1c2.5 .8 4.8 1.6 7.1 2.4l0 0 0 0 0 0c13.6 4.6 24.6 8.4 36.3 8.7c9.1 .3 17.9-1.7 23.7-5.3c5.1-3.2 7.9-7.3 7.8-14c-.1-4.6-1.8-7.8-7.7-11.6c-6.8-4.3-16.5-7.4-29-11.2l-1.6-.5 0 0c-11-3.3-24.3-7.3-34.8-13.7c-12-7.2-22.6-18.9-22.7-37.3c-.1-19.4 10.8-32.8 23.8-40.5c7.5-4.4 15.8-7.2 24.1-8.7V232c0-8.8 7.2-16 16-16z"></path>

                </svg>
                <span class="ml-3 text-2xl">Cuentas por cobrar</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('dashboard')}}">Regresar</a>
                <a class="mr-5 hover:text-red-600" href="{{route('cobrarcuenta.create')}}">Agregar cuenta por cobrar</a>
            </nav>
            <form action="{{ route('buscar.cobrarcuenta') }}" method="GET">
                <x-text-input id="cobrarcuenta" name="cobrarcuenta" type="text" autofocus placeholder="Buscar por cliente" />
                <button type="submit">Buscar</button>
            </form>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-full sm:px-6 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-3xl shadow-red-600/30">
                <div class="block rounded-3xl bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                    <div class="p-6">
                        <div class="flex flex-col text-center w-full mb-10">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Facturas de cuentas por cobrar</h1>
                            <p class="lg:w-2/3 mx-auto leading-relaxed text-red-500">Seleciona una cuenta por cobrar para ver en detalle, actualizarla o eliminarla.</p>
                        </div>
                        <!--Tabs navigation-->
                        <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                            <li role="presentation" class="flex-grow basis-0 text-center">
                                <a href="#tabs-home02" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-home02" data-te-nav-active role="tab" aria-controls="tabs-home02" aria-selected="true">Todas</a>
                            </li>
                            <li role="presentation" class="flex-grow basis-0 text-center">
                                <a href="#tabs-profile02" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-profile02" role="tab" aria-controls="tabs-profile02" aria-selected="false">Pendientes</a>
                            </li>
                            <li role="presentation" class="flex-grow basis-0 text-center">
                                <a href="#tabs-messages02" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-messages02" role="tab" aria-controls="tabs-messages02" aria-selected="false">Pagadas</a>
                            </li>

                        </ul>
                        <!--Tabs content-->
                        <div class="mb-6">
                            <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-home02" role="tabpanel" aria-labelledby="tabs-home-tab02" data-te-tab-active>
                                <div class="relative overflow-x-auto shadow-md sm:rounded-3xl">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>

                                                <th scope="col" class="px-6 py-3">
                                                    Cliente
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Numero de factura
                                                </th>

                                                <th scope="col" class="px-6 py-3">
                                                    Fecha de emisión
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Fecha de vencimiento
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Monto total
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Monto Pagado
                                                </th>

                                                <th scope="col" class="px-6 py-3">
                                                    Detalles adicionales
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
                                            @foreach ($cobrarcuentas as $cobrarcuenta)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                                    <div class="pl-3">
                                                        <div class="text-base font-semibold">{{ $cobrarcuenta->cliente->nombre }}
                                                        </div>
                                                        <div class="font-normal text-gray-500">{{ $cobrarcuenta->cliente->rfc }}
                                                        </div>
                                                        <div class="font-normal text-gray-500">{{ $cobrarcuenta->cliente->correo }}
                                                        </div>
                                                    </div>
                                                </th>

                                                <td class="px-6 py-4">
                                                    {{ $cobrarcuenta->numero_factura}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $cobrarcuenta->fecha_emision }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $cobrarcuenta->fecha_vencimiento }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    ${{ $cobrarcuenta->monto_total }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    @if($cobrarcuenta->monto_pagado != NULL)
                                                    ${{ $cobrarcuenta->monto_pagado}}
                                                    @endif
                                                    @if($cobrarcuenta->monto_pagado == NULL)
                                                    <p class="text-red-500">Pendiente</p>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $cobrarcuenta->detalles_adicionales }}
                                                </td>



                                                <td class="px-6 py-4">
                                                    <div class="flex items-center">
                                                        @if($cobrarcuenta->estatus== "Pagada")
                                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                                        @endif
                                                        @if($cobrarcuenta->estatus== "Pendiente")
                                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                                        @endif
                                                        {{ $cobrarcuenta->estatus }}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4">
                                                    <a href="cobrarcuenta/{{ $cobrarcuenta->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
                                                    </a>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-profile02" role="tabpanel" aria-labelledby="tabs-profile-tab02">
                                <div class="relative overflow-x-auto shadow-md sm:rounded-3xl">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>

                                                <th scope="col" class="px-6 py-3">
                                                    Cliente
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Numero de factura
                                                </th>

                                                <th scope="col" class="px-6 py-3">
                                                    Fecha de emisión
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Fecha de vencimiento
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Monto total
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Monto Pagado
                                                </th>

                                                <th scope="col" class="px-6 py-3">
                                                    Detalles adicionales
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
                                            @foreach ($cobrarcuentas as $cobrarcuenta) @if ($cobrarcuenta->estatus == 'Pendiente')
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                                    <div class="pl-3">
                                                        <div class="text-base font-semibold">{{ $cobrarcuenta->cliente->nombre }}
                                                        </div>
                                                        <div class="font-normal text-gray-500">{{ $cobrarcuenta->cliente->rfc }}
                                                        </div>
                                                        <div class="font-normal text-gray-500">{{ $cobrarcuenta->cliente->correo }}
                                                        </div>
                                                    </div>
                                                </th>

                                                <td class="px-6 py-4">
                                                    {{ $cobrarcuenta->numero_factura}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $cobrarcuenta->fecha_emision }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $cobrarcuenta->fecha_vencimiento }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    ${{ $cobrarcuenta->monto_total }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    @if($cobrarcuenta->monto_pagado != NULL)
                                                    ${{ $cobrarcuenta->monto_pagado}}
                                                    @endif
                                                    @if($cobrarcuenta->monto_pagado == NULL)
                                                    <p class="text-red-500">Pendiente</p>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $cobrarcuenta->detalles_adicionales }}
                                                </td>



                                                <td class="px-6 py-4">
                                                    <div class="flex items-center">
                                                        @if($cobrarcuenta->estatus== "Pagada")
                                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                                        @endif
                                                        @if($cobrarcuenta->estatus== "Pendiente")
                                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                                        @endif
                                                        {{ $cobrarcuenta->estatus }}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4">
                                                    <a href="cobrarcuenta/{{ $cobrarcuenta->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
                                                    </a>

                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-messages02" role="tabpanel" aria-labelledby="tabs-profile-tab02">
                                <div class="relative overflow-x-auto shadow-md sm:rounded-3xl">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>

                                                <th scope="col" class="px-6 py-3">
                                                    Cliente
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Numero de factura
                                                </th>

                                                <th scope="col" class="px-6 py-3">
                                                    Fecha de emisión
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Fecha de vencimiento
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Monto total
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Monto Pagado
                                                </th>

                                                <th scope="col" class="px-6 py-3">
                                                    Detalles adicionales
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
                                            @foreach ($cobrarcuentas as $cobrarcuenta) @if ($cobrarcuenta->estatus == 'Pagada')
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                                    <div class="pl-3">
                                                        <div class="text-base font-semibold">{{ $cobrarcuenta->cliente->nombre }}
                                                        </div>
                                                        <div class="font-normal text-gray-500">{{ $cobrarcuenta->cliente->rfc }}
                                                        </div>
                                                        <div class="font-normal text-gray-500">{{ $cobrarcuenta->cliente->correo }}
                                                        </div>
                                                    </div>
                                                </th>

                                                <td class="px-6 py-4">
                                                    {{ $cobrarcuenta->numero_factura}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $cobrarcuenta->fecha_emision }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $cobrarcuenta->fecha_vencimiento }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    ${{ $cobrarcuenta->monto_total }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    @if($cobrarcuenta->monto_pagado != NULL)
                                                    ${{ $cobrarcuenta->monto_pagado}}
                                                    @endif
                                                    @if($cobrarcuenta->monto_pagado == NULL)
                                                    <p class="text-red-500">Pendiente</p>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $cobrarcuenta->detalles_adicionales }}
                                                </td>



                                                <td class="px-6 py-4">
                                                    <div class="flex items-center">
                                                        @if($cobrarcuenta->estatus== "Pagada")
                                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                                        @endif
                                                        @if($cobrarcuenta->estatus== "Pendiente")
                                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                                        @endif
                                                        {{ $cobrarcuenta->estatus }}
                                                    </div>
                                                </td>

                                                <td class="px-6 py-4">
                                                    <a href="cobrarcuenta/{{ $cobrarcuenta->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
                                                    </a>

                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>