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
                <a class="mr-5 hover:text-red-600" href="{{route('recorrido.index')}}">Regresar</a>
                <a class="mr-5 hover:text-red-600" href="{{route('recorrido.create')}}">Agregar recorrido</a>
                <a class="mr-5 hover:text-red-600" href="{{ route('recorridos.empleado', ['id' => $recorrido->empleado->id])}}">Recorridos de este empleado</a>
                <a class="mr-5 hover:text-red-600" href="{{ route('recorridos.vehiculo', ['id' => $recorrido->vehiculo->id])}}">Recorridos de este vehículo</a>
            </nav>
        </div>
    </x-slot>

    <div class=" py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-2xl sm:rounded-3xl">
                <div class="">
                    @include('recorrido.partials.update')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-2xl sm:rounded-3xl">
                <div class="max-w-xl">
                    @include('recorrido.partials.delete')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>