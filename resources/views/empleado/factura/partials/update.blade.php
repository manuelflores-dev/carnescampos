<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Información del factura') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("En esta seccion puede actualizar la información del factura.") }}
        </p>
    </header>

    <form method="post" action="{{ route('factura.update', $factura) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-red-800 to-transparent opacity-25 dark:opacity-100" />
        <div class="grid gap-6 mb-6 md:grid-cols-5">
            <div>
                <x-input-label for="nombre" :value="__('Nombre proveedor')" />
                <x-text-input disabled id="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $factura->proveedor->nombre) " />
            </div>
            <div>
                <x-input-label for="rfc" :value="__('RFC')" />
                <x-text-input disabled id="rfc" type="text" class="mt-1 block w-full" :value="old('nombre', $factura->proveedor->rfc) " />
            </div>
            <div>
                <x-input-label for="telefono" :value="__('Telefono')" />
                <x-text-input disabled id="telefono" type="text" class="mt-1 block w-full" :value="old('nombre', $factura->proveedor->telefono) " />
            </div>
            <div>
                <x-input-label for="correo" :value="__('Correo')" />
                <x-text-input disabled id="correo" type="text" class="mt-1 block w-full" :value="old('nombre', $factura->proveedor->correo) " />
            </div>
            <div>
                <x-input-label for="direccion" :value="__('Dirección')" />
                <x-text-input disabled id="direccion" type="text" class="mt-1 block w-full" :value="old('nombre', $factura->proveedor->direccion) " />
            </div>

        </div>
        <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-red-800 to-transparent opacity-25 dark:opacity-100" />

        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <x-input-label for="numero_factura" :value="__('Numero de factura')" />
                <x-text-input id="numero_factura" name="numero_factura" type="number" class="mt-1 block w-full" :value="old('numero_factura', $factura->numero_factura)" required autocomplete="numero_factura" placeholder="Ingresa numero de la factura" />
                <x-input-error class="mt-2" :messages="$errors->get('numero_factura')" />
            </div>
            <div>
                <label for="fecha_ingreso" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Fecha de la
                    factura
                </label>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input name="fecha_factura" datepicker datepicker-autohide type="text" datepicker datepicker-format="yyyy-mm-dd" value="{{ old('title', $factura->fecha_factura) }}" class=" shadow border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecciona fecha de factura">
                </div>
            </div>

            <div>
                <x-input-label for="monto_factura" :value="__('Monto de la factura')" />
                <x-text-input id="monto_factura" name="monto_factura" type="number" class="mt-1 block w-full" :value="old('monto_factura', $factura->monto_factura)" required autocomplete="monto_factura" placeholder="Ingresa monto de la factura" />
                <x-input-error class="mt-2" :messages="$errors->get('monto_factura')" />
            </div>
            <div>
                <x-input-label for="detalles_factura" :value="__('Detalle de la factura')" />
                <x-text-input id="detalles_factura" name="detalles_factura" type="text" class="mt-1 block w-full" :value="old('detalles_factura', $factura->detalles_factura)" required autocomplete="detalles_factura" placeholder="Ingresa detalles de la factura" />
                <x-input-error class="mt-2" :messages="$errors->get('detalles_factura')" />
            </div>
        </div>

        <div>
            <div class="mb-6 ">

                <h2 class="text-xl font-bold mb-4 text-center">Estatus</h2>

                <div class="flex items-center justify-center">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus_factura" value="Pagada" @if($factura->estatus_factura=="Pagada") checked @endif>
                        <span class="ml-2 text-gray-700">Pagada</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus_factura" value="Pendiente" @if($factura->estatus_factura=="Pendiente") checked @endif>
                        <span class="ml-2 text-gray-700">Pendiente</span>
                    </label>
                </div>
            </div>
            </p>
            <div class="flex justify-center">
                <div class="text-center lg:text-center">
                    <a href="{{route('factura.index')}}">
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