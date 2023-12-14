<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Información del mantenimiento') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            Informacion del vehículo.
        </p>
    </header>



    <form method="post" action="{{ route('mantenimiento.update', $mantenimiento) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-red-800 to-transparent opacity-25 dark:opacity-100" />
        <div class="grid gap-6 mb-6 md:grid-cols-5">
            <div>
                <x-input-label for="marca" :value="__('Vehiculo')" />
                <x-text-input disabled id="marca" type="text" class="mt-1 block w-full" :value="old('marca', $mantenimiento->vehiculo->marca) " />
            </div>
            <div>
                <x-input-label for="modelo" :value="__('Modelo')" />
                <x-text-input disabled id="modelo" type="text" class="mt-1 block w-full" :value="old('marca', $mantenimiento->vehiculo->modelo) " />
            </div>
            <div>
                <x-input-label for="serie" :value="__('Serie')" />
                <x-text-input disabled id="serie" type="text" class="mt-1 block w-full" :value="old('marca', $mantenimiento->vehiculo->serie) " />
            </div>
            <div>
                <x-input-label for="year" :value="__('Año')" />
                <x-text-input disabled id="year" type="text" class="mt-1 block w-full" :value="old('marca', $mantenimiento->vehiculo->year) " />
            </div>
            <div>
                <x-input-label for="placas" :value="__('Placas')" />
                <x-text-input disabled id="placas" type="text" class="mt-1 block w-full" :value="old('marca', $mantenimiento->vehiculo->placas) " />
            </div>

        </div>
        <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-red-800 to-transparent opacity-25 dark:opacity-100" />
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            En esta seccion puede actualizar la información del mantenimiento.
        </p>
        <div class="grid gap-6 mb-6 md:grid-cols-2">

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
                    <input name="fecha_mantenimiento" datepicker datepicker-autohide type="text" datepicker datepicker-format="yyyy-mm-dd" class=" shadow border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('title', $mantenimiento->fecha_mantenimiento) }}" placeholder=" Selecciona fecha de mantenimiento">
                </div>
            </div>
            <div>
                <x-input-label for="costo_mantenimiento" :value="__('Costo de mantenimiento')" />
                <x-text-input id="costo_mantenimiento" name="costo_mantenimiento" type="text" class="mt-1 block w-full" :value="old('costo_mantenimiento', $mantenimiento->costo_mantenimiento) " required autocomplete="costo_mantenimiento" placeholder="Ingresa el costo del mantenimiento" />
                <x-input-error class="mt-2" :messages="$errors->get('costo_mantenimiento')" />
            </div>



            <div>
                <x-input-label for="kilometros" :value="__('Kilometraje')" />
                <x-text-input id="kilometros" name="kilometraje" type="text" class="mt-1 block w-full" :value="old('kilometros', $mantenimiento->kilometraje)" required autocomplete="kilometros" placeholder="Ingresa kilometros" />
                <x-input-error class="mt-2" :messages="$errors->get('kilometros')" />
            </div>
            <div>
                <x-input-label for="tipo_mantenimiento" :value="__('Tipo de Mantenimiento')" />
                <x-text-input id="tipo_mantenimiento" name="tipo_mantenimiento" type="text" class="mt-1 block w-full" :value="old('tipo_mantenimiento', $mantenimiento->tipo_mantenimiento)" required autocomplete="tipo_mantenimiento" placeholder="Ingresa tipo mantenimiento" />
                <x-input-error class="mt-2" :messages="$errors->get('tipo_mantenimiento')" />
            </div>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <div>
                <x-input-label for="detalle_mantenimiento" :value="__('Detalle del mantenimiento')" />
                <x-text-input id="detalle_mantenimiento" name="detalle_mantenimiento" type="text" class="mt-1 block w-full" :value="old('detalle_mantenimiento', $mantenimiento->detalle_mantenimiento)" required autocomplete="detalle_mantenimiento" placeholder="Ingresa detalle del mantenimiento" />
                <x-input-error class="mt-2" :messages="$errors->get('detalle_mantenimiento')" />
            </div>
        </div>





        </p>
        <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-red-800 to-transparent opacity-25 dark:opacity-100" />
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
</section>