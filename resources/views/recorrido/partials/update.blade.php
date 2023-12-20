<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Información del recorrido') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("") }}
        </p>
    </header>



    <form method="post" action="{{ route('recorrido.update', $recorrido) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-red-800 to-transparent opacity-25 dark:opacity-100" />
        <p class="mt-1 text-center text-sm text-gray-600 dark:text-gray-400">
            {{ __("Información del empleado.") }}
        </p>
        <div class="grid gap-6 mb-6 md:grid-cols-3">
            <div>
                <x-input-label for="conductor" :value="__('Conductor')" />
                <x-text-input disabled id="conductor" type="text" class="mt-1 block w-full" :value="old('conductor', $recorrido->empleado->nombre) " />
            </div>
            <div>
                <x-input-label for="area" :value="__('Área')" />
                <x-text-input disabled id="area" type="text" class="mt-1 block w-full" :value="old('area', $recorrido->empleado->area) " />
            </div>
            <div>
                <x-input-label for="telefono" :value="__('Teléfono')" />
                <x-text-input disabled id="telefono" type="text" class="mt-1 block w-full" :value="old('telefono', $recorrido->empleado->telefono) " />
            </div>
        </div>
        <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-red-800 to-transparent opacity-25 dark:opacity-100" />
        <p class="mt-1 text-center text-sm text-gray-600 dark:text-gray-400">
            {{ __("Información del vehículo.") }}
        </p>
        <div class="grid gap-6 mb-6 md:grid-cols-5">
            <div>
                <x-input-label for="marca" :value="__('Vehículo')" />
                <x-text-input disabled id="marca" type="text" class="mt-1 block w-full" :value="old('marca', $recorrido->vehiculo->marca) " />
            </div>
            <div>
                <x-input-label for="modelo" :value="__('Modelo')" />
                <x-text-input disabled id="modelo" type="text" class="mt-1 block w-full" :value="old('marca', $recorrido->vehiculo->modelo) " />
            </div>
            <div>
                <x-input-label for="serie" :value="__('Serie')" />
                <x-text-input disabled id="serie" type="text" class="mt-1 block w-full" :value="old('marca', $recorrido->vehiculo->serie) " />
            </div>
            <div>
                <x-input-label for="year" :value="__('Año')" />
                <x-text-input disabled id="year" type="text" class="mt-1 block w-full" :value="old('marca', $recorrido->vehiculo->year) " />
            </div>
            <div>
                <x-input-label for="placas" :value="__('Placas')" />
                <x-text-input disabled id="placas" type="text" class="mt-1 block w-full" :value="old('marca', $recorrido->vehiculo->placas) " />
            </div>

        </div>
        <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-red-800 to-transparent opacity-25 dark:opacity-100" />
        <p class="mt-1 text-center text-sm text-gray-600 dark:text-gray-400">
            {{ __("En esta seccion puede actualizar la información del recorrido.") }}
        </p>
        <div class="grid gap-6 mb-6 md:grid-cols-4">
            <div>
                <x-input-label for="litros_combustible" :value="__('Cantidad de combustible')" />
                <x-text-input id="litros_combustible" name="litros_combustible" type="number" class="mt-1 block w-full" :value=" old('litros_combustible', $recorrido->litros_combustible) " required autocomplete="litros_combustible" placeholder="" />
                <x-input-error class="mt-2" :messages="$errors->get('area')" />
            </div>
            <div>
                <x-input-label for="costo_combustible" :value="__('Costo del combustible')" />
                <x-text-input id="costo_combustible" name="costo_combustible" type="number" class="mt-1 block w-full" :value=" old('costo_combustible', $recorrido->costo_combustible) " required autocomplete="costo_combustible" placeholder="" />
                <x-input-error class="mt-2" :messages="$errors->get('area')" />
            </div>
            <div>
                <x-input-label for="gasolinera" :value="__('Gasolinera')" />
                <x-text-input id="gasolinera" name="gasolinera" type="text" class="mt-1 block w-full" :value=" old('gasolinera', $recorrido->gasolinera) " required autocomplete="gasolinera" placeholder="" />
                <x-input-error class="mt-2" :messages="$errors->get('area')" />
            </div>
            <div>
                <x-input-label for="kilometraje_actual" :value="__('Kilometraje inicial')" />
                <x-text-input id="kilometraje_actual" name="kilometraje_actual" type="text" class="mt-1 block w-full" :value=" old('kilometraje_actual', $recorrido->kilometraje_actual) " required autocomplete="kilometraje_actual" placeholder="" />
                <x-input-error class="mt-2" :messages="$errors->get('area')" />
            </div>
            <div>
                <x-input-label for="kilometraje_regreso" :value="__('Kilometraje final')" />
                <x-text-input id="kilometraje_regreso" name="kilometraje_regreso" type="text" class="mt-1 block w-full" :value=" old('kilometraje_regreso', $recorrido->kilometraje_regreso) " required autocomplete="kilometraje_regreso" placeholder="" />
                <x-input-error class="mt-2" :messages="$errors->get('area')" />
            </div>
            <div>
                <x-input-label for="created_at" :value="__('Fecha')" />
                <x-text-input id="created_at" name="created_at" type="text" class="mt-1 block w-full" :value=" old('created_at', $recorrido->created_at) " required autocomplete="created_at" placeholder="" />
                <x-input-error class="mt-2" :messages="$errors->get('created_at')" />
            </div>
        </div>
        <div>
            <div class="mb-6 ">

                <h2 class="text-xl font-bold mb-4 text-center">Estado</h2>

                <div class="flex items-center justify-center">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus" value="Terminado" @if($recorrido->estatus=="Terminado") checked @endif>
                        <span class="ml-2 text-gray-700">Terminado</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus" value="En ruta" @if($recorrido->estatus=="En ruta") checked @endif>
                        <span class="ml-2 text-gray-700">En ruta</span>
                    </label>
                </div>
            </div>


        </div>
        </p>
        <div class="text-center lg:text-center">
            <x-primary-button class="ml-3">
                Guardar
            </x-primary-button>

        </div>
    </form>

</section>