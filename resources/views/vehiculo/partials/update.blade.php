<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Información del vehículo') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("En esta seccion puede actualizar la información del vehículo.") }}
        </p>
    </header>



    <form method="post" action="{{ route('vehiculo.update', $vehiculo) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <x-input-label for="marca" :value="__('Marca')" />
                <x-text-input id="marca" name="marca" type="text" class="mt-1 block w-full" :value="old('marca',$vehiculo->marca)" required autocomplete="marca" placeholder="Ingresa marca" />
                <x-input-error class="mt-2" :messages="$errors->get('marca')" />
            </div>

            <div>
                <x-input-label for="modelo" :value="__('Modelo')" />
                <x-text-input id="modelo" name="modelo" type="text" class="mt-1 block w-full" :value="old('modelo',$vehiculo->modelo)" required autocomplete="modelo" placeholder="Ingresa modelo" />
                <x-input-error class="mt-2" :messages="$errors->get('modelo')" />
            </div>

            <div>
                <x-input-label for="serie" :value="__('Serie')" />
                <x-text-input id="serie" name="serie" type="number" class="mt-1 block w-full" :value="old('serie',$vehiculo->serie)" required autocomplete="serie" placeholder="Ingresa la serie" />
                <x-input-error class="mt-2" :messages="$errors->get('serie')" />
            </div>

            <div>
                <x-input-label for="year" :value="__('Año')" />
                <x-text-input id="year" name="year" type="text" class="mt-1 block w-full" :value="old('year',$vehiculo->year)" required autocomplete="year" placeholder="Ingresa el año" />
                <x-input-error class="mt-2" :messages="$errors->get('year')" />
            </div>
            <div>
                <x-input-label for="placas" :value="__('Placas')" />
                <x-text-input id="placas" name="placas" type="text" class="mt-1 block w-full" :value="old('placas',$vehiculo->placas)" required autocomplete="placas" placeholder="Ingresa la placa" />
                <x-input-error class="mt-2" :messages="$errors->get('placas')" />
            </div>
            <div>
                <x-input-label for="kilometros" :value="__('Kilometraje')" />
                <x-text-input id="kilometros" name="kilometros" type="text" class="mt-1 block w-full" :value="old('kilometros',$vehiculo->kilometros)" required autocomplete="kilometros" placeholder="Ingresa kilometros" />
                <x-input-error class="mt-2" :messages="$errors->get('kilometros')" />
            </div>
        </div>
        <div>
            <div class="mb-6 ">

                <h2 class="text-xl font-bold mb-4 text-center">Estatus</h2>

                <div class="flex items-center justify-center">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus" value="Disponible" @if($vehiculo->estatus=="Disponible") checked @endif>
                        <span class="ml-2 text-gray-700">Disponible</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus" value="No disponible" @if($vehiculo->estatus=="No disponible") checked @endif>
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