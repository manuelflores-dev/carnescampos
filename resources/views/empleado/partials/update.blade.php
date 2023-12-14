<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Información del empleado') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("En esta seccion puede actualizar la información del empleado.") }}
        </p>
    </header>



    <form method="post" action="{{ route('empleado.update', $empleado) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <x-input-label for="nombre" :value="__('Nombre')" />
                <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $empleado->nombre) " required autocomplete="nombre" placeholder="Ingresa nombre completo" />
                <x-input-error class="mt-2" :messages="$errors->get('nombre')" />
            </div>

            <div>
                <x-input-label for="area" :value="__('Área')" />
                <x-text-input id="area" name="area" type="text" class="mt-1 block w-full" :value=" old('area', $empleado->area) " required autocomplete="area" placeholder="Ingresa área" />
                <x-input-error class="mt-2" :messages="$errors->get('area')" />
            </div>

            <div>
                <x-input-label for="telefono" :value="__('Teléfono')" />
                <x-text-input id="telefono" name="telefono" type="number" class="mt-1 block w-full" :value=" old('telefono', $empleado->telefono) " required autocomplete="telefono" placeholder="Ingresa teléfono" />
                <x-input-error class="mt-2" :messages="$errors->get('telefono')" />
            </div>
            <div>
                <x-input-label for="direccion" :value="__('Dirección')" />
                <x-text-input id="direccion" name="direccion" type="text" class="mt-1 block w-full" :value=" old('direccion', $empleado->direccion) " required autocomplete="direccion" placeholder="Ingresa dirección" />
                <x-input-error class="mt-2" :messages="$errors->get('direccion')" />
            </div>
        </div>
        <div>
            <div class="mb-6 ">

                <h2 class="text-xl font-bold mb-4 text-center">Estatus</h2>

                <div class="flex items-center justify-center">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus" value="Disponible" @if($empleado->estatus=="Disponible") checked @endif>
                        <span class="ml-2 text-gray-700">Disponible</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus" value="No disponible" @if($empleado->estatus=="No disponible") checked @endif>
                        <span class="ml-2 text-gray-700">No disponible</span>
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