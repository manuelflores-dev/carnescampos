<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zM272 192H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H272c-8.8 0-16-7.2-16-16s7.2-16 16-16zM256 304c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H272c-8.8 0-16-7.2-16-16zM164 152v13.9c7.5 1.2 14.6 2.9 21.1 4.7c10.7 2.8 17 13.8 14.2 24.5s-13.8 17-24.5 14.2c-11-2.9-21.6-5-31.2-5.2c-7.9-.1-16 1.8-21.5 5c-4.8 2.8-6.2 5.6-6.2 9.3c0 1.8 .1 3.5 5.3 6.7c6.3 3.8 15.5 6.7 28.3 10.5l.7 .2c11.2 3.4 25.6 7.7 37.1 15c12.9 8.1 24.3 21.3 24.6 41.6c.3 20.9-10.5 36.1-24.8 45c-7.2 4.5-15.2 7.3-23.2 9V360c0 11-9 20-20 20s-20-9-20-20V345.4c-10.3-2.2-20-5.5-28.2-8.4l0 0 0 0c-2.1-.7-4.1-1.4-6.1-2.1c-10.5-3.5-16.1-14.8-12.6-25.3s14.8-16.1 25.3-12.6c2.5 .8 4.9 1.7 7.2 2.4c13.6 4.6 24 8.1 35.1 8.5c8.6 .3 16.5-1.6 21.4-4.7c4.1-2.5 6-5.5 5.9-10.5c0-2.9-.8-5-5.9-8.2c-6.3-4-15.4-6.9-28-10.7l-1.7-.5c-10.9-3.3-24.6-7.4-35.6-14c-12.7-7.7-24.6-20.5-24.7-40.7c-.1-21.1 11.8-35.7 25.8-43.9c6.9-4.1 14.5-6.8 22.2-8.5V152c0-11 9-20 20-20s20 9 20 20z"></path>

                </svg>
                <span class="ml-3 text-2xl">Cuentas por cobrar</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('dashboard')}}">Regresar</a>
                <a class="mr-5 hover:text-red-600" href="{{route('cobrarcuenta.create')}}">Agregar cuenta por cobrar</a>
            </nav>
            <form action="{{ route('buscar.cobrarcuenta') }}" method="GET">
                <x-text-input id="cobrarcuenta" name="cobrarcuenta" type="text" autofocus placeholder="Buscar por nombre" />
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
                        <div class="relative overflow-x-auto shadow-md sm:rounded-3xl">

                            <!--Tabs navigation-->
                            <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                                <li role="presentation">
                                    <a href="#tabs-home" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-home" data-te-nav-active role="tab" aria-controls="tabs-home" aria-selected="true">Todas las facturas</a>
                                </li>
                                <li role="presentation">
                                    <a href="#tabs-profile" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-profile" role="tab" aria-controls="tabs-profile" aria-selected="false">Facturas pendientes</a>
                                </li>
                                <li role="presentation">
                                    <a href="#tabs-messages" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-messages" role="tab" aria-controls="tabs-messages" aria-selected="false">Facturas pagadas</a>
                                </li>

                            </ul>

                            <!--Tabs content-->
                            <div class="mb-6">
                                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab" data-te-tab-active>
                                    Todas las facturas de las cuentas por cobrar
                                    <div data-te-datatable-init>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Número de factura</th>
                                                    <th>Fecha de emisión</th>
                                                    <th>Fecha de vencimiento</th>
                                                    <th>Monto total</th>
                                                    <th>Monto pagado</th>
                                                    <th>Detalles adicionales</th>
                                                    <th>Estatus</th>
                                                    <th>Cliente</th>
                                                    <th>RFC</th>
                                                    <th>Domicilio</th>
                                                    <th>Detalles</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cobrarcuentas as $cobrarcuenta)
                                                <tr>
                                                    <td>{{$cobrarcuenta->numero_factura}}</td>
                                                    <td>{{$cobrarcuenta->fecha_emision}}</td>
                                                    <td>{{$cobrarcuenta->fecha_vencimiento}}</td>
                                                    <td>$ {{$cobrarcuenta->monto_total}}</td>
                                                    <td>$ {{$cobrarcuenta->monto_pagado}}</td>
                                                    <td>{{$cobrarcuenta->detalles_adicionales}}</td>
                                                    <td>{{$cobrarcuenta->estatus}}</td>
                                                    <td>{{$cobrarcuenta->cliente->nombre}}</td>
                                                    <td>{{$cobrarcuenta->cliente->rfc}}</td>
                                                    <td>{{$cobrarcuenta->cliente->direccion}}</td>
                                                    <td>
                                                        <a href="cobrarcuenta/{{ $cobrarcuenta->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
                                    Facturas de las cuentas por cobrar pendientes
                                    <div data-te-datatable-init>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Número de factura</th>
                                                    <th>Fecha de emisión</th>
                                                    <th>Fecha de vencimiento</th>
                                                    <th>Monto total</th>
                                                    <th>Monto pagado</th>
                                                    <th>Detalles adicionales</th>
                                                    <th>Estatus</th>
                                                    <th>Cliente</th>
                                                    <th>RFC</th>
                                                    <th>Domicilio</th>
                                                    <th>Detalles</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cobrarcuentas as $cobrarcuenta) @if ($cobrarcuenta->estatus == 'Pendiente')
                                                <tr>
                                                    <td>{{$cobrarcuenta->numero_factura}}</td>
                                                    <td>{{$cobrarcuenta->fecha_emision}}</td>
                                                    <td>{{$cobrarcuenta->fecha_vencimiento}}</td>
                                                    <td>$ {{$cobrarcuenta->monto_total}}</td>
                                                    <td>$ {{$cobrarcuenta->monto_pagado}}</td>
                                                    <td>{{$cobrarcuenta->detalles_adicionales}}</td>
                                                    <td>{{$cobrarcuenta->estatus}}</td>
                                                    <td>{{$cobrarcuenta->cliente->nombre}}</td>
                                                    <td>{{$cobrarcuenta->cliente->rfc}}</td>
                                                    <td>{{$cobrarcuenta->cliente->direccion}}</td>
                                                    <td>
                                                        <a href="cobrarcuenta/{{ $cobrarcuenta->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endIf
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-messages" role="tabpanel" aria-labelledby="tabs-profile-tab">
                                    Facturas de las cuentas por cobrar pagadas
                                    <div data-te-datatable-init>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Número de factura</th>
                                                    <th>Fecha de emisión</th>
                                                    <th>Fecha de vencimiento</th>
                                                    <th>Monto total</th>
                                                    <th>Monto pagado</th>
                                                    <th>Detalles adicionales</th>
                                                    <th>Estatus</th>
                                                    <th>Cliente</th>
                                                    <th>RFC</th>
                                                    <th>Domicilio</th>
                                                    <th>Detalles</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cobrarcuentas as $cobrarcuenta) @if ($cobrarcuenta->estatus == 'Pagada')
                                                <tr>
                                                    <td>{{$cobrarcuenta->numero_factura}}</td>
                                                    <td>{{$cobrarcuenta->fecha_emision}}</td>
                                                    <td>{{$cobrarcuenta->fecha_vencimiento}}</td>
                                                    <td>$ {{$cobrarcuenta->monto_total}}</td>
                                                    <td>$ {{$cobrarcuenta->monto_pagado}}</td>
                                                    <td>{{$cobrarcuenta->detalles_adicionales}}</td>
                                                    <td>{{$cobrarcuenta->estatus}}</td>
                                                    <td>{{$cobrarcuenta->cliente->nombre}}</td>
                                                    <td>{{$cobrarcuenta->cliente->rfc}}</td>
                                                    <td>{{$cobrarcuenta->cliente->direccion}}</td>
                                                    <td>
                                                        <a href="cobrarcuenta/{{ $cobrarcuenta->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
                                                        </a>
                                                    </td>
                                                </tr> @endIf
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>