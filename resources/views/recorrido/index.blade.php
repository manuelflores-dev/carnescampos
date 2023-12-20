<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M256 32H181.2c-27.1 0-51.3 17.1-60.3 42.6L3.1 407.2C1.1 413 0 419.2 0 425.4C0 455.5 24.5 480 54.6 480H256V416c0-17.7 14.3-32 32-32s32 14.3 32 32v64H521.4c30.2 0 54.6-24.5 54.6-54.6c0-6.2-1.1-12.4-3.1-18.2L455.1 74.6C446 49.1 421.9 32 394.8 32H320V96c0 17.7-14.3 32-32 32s-32-14.3-32-32V32zm64 192v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V224c0-17.7 14.3-32 32-32s32 14.3 32 32z"></path>

                </svg>
                <span class="ml-3 text-2xl">Recorridos</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('dashboard')}}">Regresar</a>
                <a class="mr-5 hover:text-red-600" href="{{route('recorrido.create')}}">Agregar recorrido</a>
                <a class="mr-5 hover:text-red-600" href="{{route('vehiculo.create')}}">Agregar vehcíulo</a>
                <a class="mr-5 hover:text-red-600" href="{{route('recorrido.create')}}">Agregar empleado</a>
                <a class="mr-5 hover:text-red-600" href="{{route('recorrido.pdf')}}">Generar PDF</a>
            </nav>
            <form action="{{ route('buscar.recorrido') }}" method="GET">
                <x-text-input id="recorrido" name="recorrido" type="text" autofocus placeholder="Buscar por vehículo" />
                <button type="submit">Buscar</button>
            </form>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-3xl shadow-red-600/30">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col text-center w-full mb-10">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Recorridos registrados</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-red-500">Seleciona un recorrido para ver en detalle, actualizarlo o eliminarlo.</p>
                    </div>

                    <!--Tabs navigation-->
                    <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                        <li role="presentation" class="flex-grow basis-0 text-center">
                            <a href="#tabs-home02" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-home02" data-te-nav-active role="tab" aria-controls="tabs-home02" aria-selected="true">Todos los recorridos</a>
                        </li>
                        <li role="presentation" class="flex-grow basis-0 text-center">
                            <a href="#tabs-profile02" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-profile02" role="tab" aria-controls="tabs-profile02" aria-selected="false">Recorridos en ruta</a>
                        </li>
                        <li role="presentation" class="flex-grow basis-0 text-center">
                            <a href="#tabs-messages02" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-messages02" role="tab" aria-controls="tabs-messages02" aria-selected="false">Recorridos finalizados</a>
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
                                                Conductor
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Vehículo
                                            </th>

                                            <th scope="col" class="px-6 py-3">
                                                KM Inincial
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                KM final
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Costo del combustible
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Cantidad de combustible
                                            </th>

                                            <th scope="col" class="px-6 py-3">
                                                Gasolinera
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Estado del recorrido
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Fecha
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Detalles
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
                                                {{ $recorrido->kilometraje_actual}}
                                            </td>
                                            <td class="px-6 py-4">
                                                @if($recorrido->kilometraje_regreso != NULL)
                                                {{ $recorrido->kilometraje_regreso}}
                                                @endif
                                                @if($recorrido->kilometraje_regreso == NULL)
                                                <p class="text-red-500">Pendiente</p>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4">
                                                $ {{ $recorrido->costo_combustible }}
                                            </td>
                                            <td class="px-6 py-4">
                                                @if($recorrido->litros_combustible != NULL)
                                                {{ $recorrido->litros_combustible}} Litros
                                                @endif
                                                @if($recorrido->litros_combustible == NULL)
                                                <p class="text-red-500">Pendiente</p>
                                                @endif
                                            </td>

                                            <td class="px-6 py-4">
                                                @if($recorrido->gasolinera != NULL)
                                                {{ $recorrido->gasolinera}}
                                                @endif
                                                @if($recorrido->gasolinera == NULL)
                                                <p class="text-red-500">Pendiente</p>
                                                @endif
                                            </td>


                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    @if($recorrido->estatus== "Terminado")
                                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                                    @endif
                                                    @if($recorrido->estatus== "En ruta")
                                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                                    @endif
                                                    {{ $recorrido->estatus }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $recorrido->vehiculo->created_at}}
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="recorrido/{{ $recorrido->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
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
                                                Conductor
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Vehículo
                                            </th>

                                            <th scope="col" class="px-6 py-3">
                                                KM Inincial
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                KM final
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Costo del combustible
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Cantidad de combustible
                                            </th>

                                            <th scope="col" class="px-6 py-3">
                                                Gasolinera
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Estado del recorrido
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Fecha
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Detalles
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recorridos as $recorrido) @if ($recorrido->estatus == 'En ruta')
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
                                                {{ $recorrido->kilometraje_actual}}
                                            </td>
                                            <td class="px-6 py-4">
                                                @if($recorrido->kilometraje_regreso != NULL)
                                                {{ $recorrido->kilometraje_regreso}}
                                                @endif
                                                @if($recorrido->kilometraje_regreso == NULL)
                                                <p class="text-red-500">Pendiente</p>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4">
                                                $ {{ $recorrido->costo_combustible }}
                                            </td>
                                            <td class="px-6 py-4">
                                                @if($recorrido->litros_combustible != NULL)
                                                {{ $recorrido->litros_combustible}} Litros
                                                @endif
                                                @if($recorrido->litros_combustible == NULL)
                                                <p class="text-red-500">Pendiente</p>
                                                @endif
                                            </td>

                                            <td class="px-6 py-4">
                                                @if($recorrido->gasolinera != NULL)
                                                {{ $recorrido->gasolinera}}
                                                @endif
                                                @if($recorrido->gasolinera == NULL)
                                                <p class="text-red-500">Pendiente</p>
                                                @endif
                                            </td>


                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    @if($recorrido->estatus== "Terminado")
                                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                                    @endif
                                                    @if($recorrido->estatus== "En ruta")
                                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                                    @endif
                                                    {{ $recorrido->estatus }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $recorrido->vehiculo->created_at}}
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="recorrido/{{ $recorrido->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
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
                                                Conductor
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Vehículo
                                            </th>

                                            <th scope="col" class="px-6 py-3">
                                                KM Inincial
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                KM final
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Costo del combustible
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Cantidad de combustible
                                            </th>

                                            <th scope="col" class="px-6 py-3">
                                                Gasolinera
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Estado del recorrido
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Fecha
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Detalles
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recorridos as $recorrido) @if ($recorrido->estatus == 'Terminado')
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
                                                {{ $recorrido->kilometraje_actual}}
                                            </td>
                                            <td class="px-6 py-4">
                                                @if($recorrido->kilometraje_regreso != NULL)
                                                {{ $recorrido->kilometraje_regreso}}
                                                @endif
                                                @if($recorrido->kilometraje_regreso == NULL)
                                                <p class="text-red-500">Pendiente</p>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4">
                                                $ {{ $recorrido->costo_combustible }}
                                            </td>
                                            <td class="px-6 py-4">
                                                @if($recorrido->litros_combustible != NULL)
                                                {{ $recorrido->litros_combustible}} Litros
                                                @endif
                                                @if($recorrido->litros_combustible == NULL)
                                                <p class="text-red-500">Pendiente</p>
                                                @endif
                                            </td>

                                            <td class="px-6 py-4">
                                                @if($recorrido->gasolinera != NULL)
                                                {{ $recorrido->gasolinera}}
                                                @endif
                                                @if($recorrido->gasolinera == NULL)
                                                <p class="text-red-500">Pendiente</p>
                                                @endif
                                            </td>


                                            <td class="px-6 py-4">
                                                <div class="flex items-center">
                                                    @if($recorrido->estatus== "Terminado")
                                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                                    @endif
                                                    @if($recorrido->estatus== "En ruta")
                                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>
                                                    @endif
                                                    {{ $recorrido->estatus }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $recorrido->vehiculo->created_at}}
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="recorrido/{{ $recorrido->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalles
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