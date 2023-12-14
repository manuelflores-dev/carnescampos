<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Información del proveedor') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("En esta seccion puede actualizar la información del proveedor.") }}
        </p>
    </header>



    <form method="post" action="{{ route('proveedor.update', $proveedor) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <x-input-label for="nombre" :value="__('Nombre')" />
                <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre',$proveedor->nombre)" autocomplete="nombre" placeholder="Ingresa nombre completo" />
                <x-input-error class="mt-2" :messages="$errors->get('nombre')" />
            </div>

            <div>
                <x-input-label for="rfc" :value="__('RFC')" />
                <x-text-input id="rfc" name="rfc" type="text" class="mt-1 block w-full" :value="old('rfc',$proveedor->rfc)" required autocomplete="rfc" placeholder="Ingresa rfc" />
                <x-input-error class="mt-2" :messages="$errors->get('rfc')" />
            </div>

            <div>
                <x-input-label for="telefono" :value="__('Teléfono')" />
                <x-text-input id="telefono" name="telefono" type="number" class="mt-1 block w-full" :value="old('telefono',$proveedor->telefono)" required autocomplete="telefono" placeholder="Ingresa teléfono" />
                <x-input-error class="mt-2" :messages="$errors->get('telefono')" />
            </div>
            <div>
                <x-input-label for="correo" :value="__('Correo')" />
                <x-text-input id="correo" name="correo" type="email" class="mt-1 block w-full" :value="old('correo',$proveedor->correo)" required autocomplete="correo" placeholder="Ingresa correo" />
                <x-input-error class="mt-2" :messages="$errors->get('correo')" />
            </div>
        </div>
        <div>
            <div class="mb-6 ">
                <x-input-label for="direccion" :value="__('Dirección')" />
                <x-text-input id="direccion" name="direccion" type="text" class="mt-1 block w-full" :value="old('direccion',$proveedor->direccion)" required autocomplete="direccion" placeholder="Ingresa dirección" />
                <x-input-error class="mt-2" :messages="$errors->get('direccion')" />
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