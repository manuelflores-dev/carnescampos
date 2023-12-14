<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Información del factura de la cuenta por cobrar') }}
        </h2>


    </header>

    <form method="post" action="{{ route('cobrarcuenta.update', $cobrarcuenta) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-red-800 to-transparent opacity-25 dark:opacity-100" />
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            Información del cliente.
        </p>
        <div class="grid gap-6 mb-6 md:grid-cols-5">
            <div>
                <x-input-label for="nombre" :value="__('Nombre cliente')" />
                <x-text-input disabled id="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $cobrarcuenta->cliente->nombre) " />
            </div>
            <div>
                <x-input-label for="rfc" :value="__('RFC')" />
                <x-text-input disabled id="rfc" type="text" class="mt-1 block   w-full" :value="old('nombre', $cobrarcuenta->cliente->rfc) " />
            </div>
            <div>
                <x-input-label for="telefono" :value="__('Telefono')" />
                <x-text-input disabled id="telefono" type="text" class="mt-1 block w-full" :value="old('nombre', $cobrarcuenta->cliente->telefono) " />
            </div>
            <div>
                <x-input-label for="correo" :value="__('Correo')" />
                <x-text-input disabled id="correo" type="text" class="mt-1 block w-full" :value="old('nombre', $cobrarcuenta->cliente->correo) " />
            </div>
            <div>
                <x-input-label for="direccion" :value="__('Dirección')" />
                <x-text-input disabled id="direccion" type="text" class="mt-1 block w-full" :value="old('nombre', $cobrarcuenta->cliente->direccion) " />
            </div>

        </div>
        <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-red-800 to-transparent opacity-25 dark:opacity-100" />
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            En esta seccion puede actualizar la información del factura.
        </p>
        <div class="grid gap-6 mb-6 md:grid-cols-3">
            <div>
                <x-input-label for="numero_factura" :value="__('Numero de factura')" />
                <x-text-input id="numero_factura" name="numero_factura" type="number" class="mt-1 block w-full" :value="old('numero_factura', $cobrarcuenta->numero_factura)" required autocomplete="numero_factura" placeholder="Ingresa numero de la factura" />
                <x-input-error class="mt-2" :messages="$errors->get('numero_factura')" />
            </div>
            <div>
                <label for="fecha_emision" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                    Fecha de emision de la factura
                </label>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input name="fecha_emision" value="{{ old('fecha_emision', $cobrarcuenta->fecha_emision) }}" datepicker datepicker-autohide type="text" datepicker datepicker-format="yyyy-mm-dd" class=" shadow border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecciona fecha de emision de la factura">
                </div>
            </div>
            <div>
                <label for="fecha_vencimiento" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                    Fecha de vencimiento de la factura
                </label>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input name="fecha_vencimiento" value="{{ old('fecha_vencimiento', $cobrarcuenta->fecha_vencimiento) }}" datepicker datepicker-autohide type="text" datepicker datepicker-format="yyyy-mm-dd" class=" shadow border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecciona fecha de vencimineto de la factura">
                </div>
            </div>

            <div>
                <x-input-label for="monto_total" :value="__('Monto total')" />
                <x-text-input id="monto_total" name="monto_total" type="number" step="any" class="mt-1 block w-full" :value="old('monto_total', $cobrarcuenta->monto_total)" required autocomplete="monto_total" placeholder="Ingresa monto total de la factura" />
                <x-input-error class="mt-2" :messages="$errors->get('monto_total')" />
            </div>
            <div>
                <x-input-label for="monto_pagado" :value="__('Monto pagado')" />
                <x-text-input id="monto_pagado" name="monto_pagado" type="number" step="any" class="mt-1 block w-full" :value="old('monto_pagado', $cobrarcuenta->monto_pagado)" required autocomplete="monto_pagado" placeholder="Ingresa monto pagado de la factura" />
                <x-input-error class="mt-2" :messages="$errors->get('monto_pagado')" />
            </div>
            <div>
                <div class="mb-6 ">

                    <h2 class="text-xl font-bold mb-4 text-center">Estatus</h2>

                    <div class="flex items-center justify-center">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus" value="Pagada" @if($cobrarcuenta->estatus=="Pagada") checked @endif>
                            <span class="ml-2 text-gray-700">Pagada</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus" value="Pendiente" @if($cobrarcuenta->estatus=="Pendiente") checked @endif>
                            <span class="ml-2 text-gray-700">Pendiente</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <x-input-label for="detalles_adicionales" :value="__('Detalles Adicionales')" />
            <x-text-input id="detalles_adicionales" name="detalles_adicionales" type="text" class="mt-1 block w-full" :value="old('detalles_adicionales', $cobrarcuenta->detalles_adicionales)" required autocomplete="detalles_adicionales" placeholder="Ingresa detalles de la factura" />
            <x-input-error class="mt-2" :messages="$errors->get('detalles_adicionales')" />
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