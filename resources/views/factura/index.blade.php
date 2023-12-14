<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[61px] h-[61px] fill-[#d20f0f]" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>

                </svg>
                <span class="ml-3 text-2xl">Facturas</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('factura.create')}}">Agregar factura</a>
                <a class="mr-5 hover:text-red-600">Facturas de facturas</a>
            </nav>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-full sm:px-6 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-3xl">
                <div class="block rounded-3xl bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                    <div class="p-6">
                        <div class="flex flex-col text-center w-full mb-10">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Facturas registradas</h1>
                            <p class="lg:w-2/3 mx-auto leading-relaxed text-red-500">Seleciona una factura para ver en detalle, actualizarla o eliminarla.</p>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-3xl">

                            <!--Tabs navigation-->
                            <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                                <li role="presentation">
                                    <a href="#tabs-home" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-home" data-te-nav-active role="tab" aria-controls="tabs-home" aria-selected="true">Todas</a>
                                </li>
                                <li role="presentation">
                                    <a href="#tabs-profile" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-profile" role="tab" aria-controls="tabs-profile" aria-selected="false">Pendientes</a>
                                </li>
                                <li role="presentation">
                                    <a href="#tabs-messages" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-messages" role="tab" aria-controls="tabs-messages" aria-selected="false">Pagadas</a>
                                </li>

                            </ul>

                            <!--Tabs content-->
                            <div class="mb-6">
                                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab" data-te-tab-active>
                                    Todas las facturas
                                    <div data-te-datatable-init>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Numero</th>
                                                    <th>Fecha</th>
                                                    <th>Monto</th>
                                                    <th>Detalles</th>
                                                    <th>Estatus</th>
                                                    <th>Proveedor</th>
                                                    <th>RFC</th>
                                                    <th>Domicilio</th>
                                                    <th>Accion</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($facturas as $factura)
                                                <tr>
                                                    <td>{{$factura->numero_factura}}</td>
                                                    <td>{{$factura->fecha_factura}}</td>
                                                    <td>{{$factura->monto_factura}}</td>
                                                    <td>{{$factura->detalles_factura}}</td>
                                                    <td>{{$factura->estatus_factura}}</td>
                                                    <td>{{$factura->proveedor->nombre}}</td>
                                                    <td>{{$factura->proveedor->rfc}}</td>
                                                    <td>{{$factura->proveedor->direccion}}</td>
                                                    <td>
                                                        <a href="factura/{{ $factura->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
                                    Facturas pendientes
                                    <div data-te-datatable-init>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Numero</th>
                                                    <th>Fecha</th>
                                                    <th>Monto</th>
                                                    <th>Detalles</th>
                                                    <th>Estatus</th>
                                                    <th>Proveedor</th>
                                                    <th>RFC</th>
                                                    <th>Domicilio</th>
                                                    <th>Accion</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($facturas as $factura) @if ($factura->estatus_factura == 'Pendiente')
                                                <tr>
                                                    <td>{{$factura->numero_factura}}</td>
                                                    <td>{{$factura->fecha_factura}}</td>
                                                    <td>{{$factura->monto_factura}}</td>
                                                    <td>{{$factura->detalles_factura}}</td>
                                                    <td>{{$factura->estatus_factura}}</td>
                                                    <td>{{$factura->proveedor->nombre}}</td>
                                                    <td>{{$factura->proveedor->rfc}}</td>
                                                    <td>{{$factura->proveedor->direccion}}</td>
                                                    <td>
                                                        <a href="factura/{{ $factura->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
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
                                    Facturas Pagadas
                                    <div data-te-datatable-init>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Numero</th>
                                                    <th>Fecha</th>
                                                    <th>Monto</th>
                                                    <th>Detalles</th>
                                                    <th>Estatus</th>
                                                    <th>Proveedor</th>
                                                    <th>RFC</th>
                                                    <th>Domicilio</th>
                                                    <th>Accion</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($facturas as $factura) @if ($factura->estatus_factura == 'Pagada')
                                                <tr>
                                                    <td>{{$factura->numero_factura}}</td>
                                                    <td>{{$factura->fecha_factura}}</td>
                                                    <td>{{$factura->monto_factura}}</td>
                                                    <td>{{$factura->detalles_factura}}</td>
                                                    <td>{{$factura->estatus_factura}}</td>
                                                    <td>{{$factura->proveedor->nombre}}</td>
                                                    <td>{{$factura->proveedor->rfc}}</td>
                                                    <td>{{$factura->proveedor->direccion}}</td>
                                                    <td>
                                                        <a href="{{ route('factura.edit', ['factura' => $factura->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
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