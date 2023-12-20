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
            </nav>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="block rounded-3xl bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                <div class="p-6">
                    <h5 class="mb-2 text-2xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        Formulario de registro de recorridos
                    </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        Ingrese los campos solicitados

                    <form method="POST" action="{{ route('recorrido.store') }}">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="empleado_id" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                                    Conductor</label>
                                <select required name="empleado_id" class="block w-full py-2 px-4 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-400 dark:focus:border-indigo-600 focus:ring-red-400 dark:focus:ring-indigo-600 rounded-2xl shadow-lg">
                                    <option selected>Seleccionar empleado que sera conductor</option>
                                    @foreach ($empleados as $empleado) @if ($empleado->estatus == 'Disponible')
                                    <option value="{{ $empleado->id }}">{{ $empleado->nombre }} | Área:
                                        {{ $empleado->area }}
                                    </option>
                                    @endif
                                    @if ($empleado->estatus == 'No disponible')
                                    <option>No hay conductores disponibles</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="vehiculo_id" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Vehículo
                                </label>
                                <select required name="vehiculo_id" class="block w-full py-2 px-4 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-400 dark:focus:border-indigo-600 focus:ring-red-400 dark:focus:ring-indigo-600 rounded-2xl shadow-lg">
                                    <option selected>Seleccionar Vehículo</option>
                                    @foreach ($vehiculos as $vehiculo) @if ($vehiculo->estatus == 'Disponible')
                                    <option value="{{ $vehiculo->id }}">{{ $vehiculo->marca }} |
                                        {{ $vehiculo->modelo }} | Placas: {{ $vehiculo->placas }} | Serie: {{ $vehiculo->serie }} | Año: {{ $vehiculo->year }}
                                    </option>
                                    @endif
                                    @if ($vehiculo->estatus == 'No disponible')
                                    <option>No hay vehiculos disponibles</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <x-input-label for="kilometraje_actual" :value="__('Kilometraje actual')" />
                                <x-text-input id="kilometraje_actual" name="kilometraje_actual" type="text" class="mt-1 block w-full" :value="old('kilometraje_actual')" required autocomplete="kilometraje_actual" placeholder="Ingresa kilometraje actual" />
                                <x-input-error class="mt-2" :messages="$errors->get('kilometraje_actual')" />
                            </div>
                            <div>
                                <x-input-label for="costo_combustible" :value="__('Monto asignado para combustible')" />
                                <x-text-input required id="costo_combustible" name="costo_combustible" type="number" class="mt-1 block w-full" :value="old('costo_combustible')" autocomplete="costo_combustible" placeholder="Ingresa cantidad de dinero" />
                                <x-input-error class="mt-2" :messages="$errors->get('costo_combustible')" />
                            </div>
                            <div>
                                <x-input-label for="litros_combustible" :value="__('Cantidad de combustible')" />
                                <x-text-input id="litros_combustible" name="litros_combustible" type="number" class="mt-1 block w-full" :value="old('litros_combustible')" autocomplete="litros_combustible" placeholder="Ingresa la cantidad de combustible" />
                                <x-input-error class="mt-2" :messages="$errors->get('litros_combustible')" />
                            </div>

                            <div>
                                <x-input-label for="gasolinera" :value="__('Gasolinera')" />
                                <x-text-input id="gasolinera" name="gasolinera" type="text" class="mt-1 block w-full" :value="old('gasolinera')" autocomplete="gasolinera" placeholder="Ingresa gasolinera" />
                                <x-input-error class="mt-2" :messages="$errors->get('gasolinera')" />
                            </div>
                        </div>

                        </p>
                        <div class="flex justify-center">
                            <div class="text-center lg:text-center">
                                <a href="{{route('recorrido.index')}}">
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