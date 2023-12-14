<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"></path>

                </svg>
                <span class="ml-3 text-2xl">Mantenimientos</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('mantenimiento.index')}}">Regresar</a>
            </nav>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="block rounded-3xl bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                <div class="p-6">
                    <h5 class="mb-2 text-2xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        Formulario de registro de mantenimiento de vehículo
                    </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        Ingrese los campos solicitados

                    <form method="POST" action="{{ route('mantenimiento.store') }}">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="vehiculo_id" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Vehículo
                                </label>
                                <select require autofocus name="vehiculo_id" class="block w-full py-2 px-4 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-400 dark:focus:border-indigo-600 focus:ring-red-400 dark:focus:ring-indigo-600 rounded-2xl shadow-lg">
                                    <option selected>Seleccionar Vehículo</option>
                                    @foreach ($vehiculos as $vehiculo)
                                    <option value="{{ $vehiculo->id }}">{{ $vehiculo->marca }} |
                                        {{ $vehiculo->modelo }} | Placas: {{ $vehiculo->placas }} | Serie: {{ $vehiculo->serie }} | Año: {{ $vehiculo->year }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="fecha_ingreso" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Fecha de
                                    mantenimiento
                                </label>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="fecha_mantenimiento" datepicker datepicker-autohide type="text" datepicker datepicker-format="yyyy-mm-dd" class=" shadow border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecciona fecha de mantenimiento">
                                </div>
                            </div>

                            <div>
                                <x-input-label for="tipo_mantenimiento" :value="__('Tipo de Mantenimiento')" />
                                <x-text-input id="tipo_mantenimiento" name="tipo_mantenimiento" type="text" class="mt-1 block w-full" :value="old('tipo_mantenimiento')" required autocomplete="tipo_mantenimiento" placeholder="Ingresa tipo mantenimiento" />
                                <x-input-error class="mt-2" :messages="$errors->get('tipo_mantenimiento')" />
                            </div>
                            <div>
                                <x-input-label for="detalle_mantenimiento" :value="__('Detalle del mantenimiento')" />
                                <x-text-input id="detalle_mantenimiento" name="detalle_mantenimiento" type="text" class="mt-1 block w-full" :value="old('detalle_mantenimiento')" required autocomplete="detalle_mantenimiento" placeholder="Ingresa detalle del mantenimiento" />
                                <x-input-error class="mt-2" :messages="$errors->get('detalle_mantenimiento')" />
                            </div>

                            <div>
                                <x-input-label for="costo_mantenimiento" :value="__('Costo de mantenimiento')" />
                                <x-text-input id="costo_mantenimiento" name="costo_mantenimiento" type="text" class="mt-1 block w-full" :value="old('costo_mantenimiento')" required autocomplete="costo_mantenimiento" placeholder="Ingresa el costo del mantenimiento" />
                                <x-input-error class="mt-2" :messages="$errors->get('costo_mantenimiento')" />
                            </div>



                            <div>
                                <x-input-label for="kilometros" :value="__('Kilometraje')" />
                                <x-text-input id="kilometros" name="kilometraje" type="text" class="mt-1 block w-full" :value="old('kilometros')" required autocomplete="kilometros" placeholder="Ingresa kilometros" />
                                <x-input-error class="mt-2" :messages="$errors->get('kilometros')" />
                            </div>

                        </div>

                        </p>
                        <div class="flex justify-center">
                            <div class="text-center lg:text-center">
                                <a href="{{route('mantenimiento.index')}}">
                                    <x-secondary-button class="ml-3">
                                        cancelar
                                    </x-secondary-button>
                                </a>
                            </div>
                            <div class="text-center lg:text-center">
                                <x-primary-button class="ml-3">
                                    Guardar
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>