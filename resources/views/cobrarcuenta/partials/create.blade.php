<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zM272 192H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H272c-8.8 0-16-7.2-16-16s7.2-16 16-16zM256 304c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H272c-8.8 0-16-7.2-16-16zM164 152v13.9c7.5 1.2 14.6 2.9 21.1 4.7c10.7 2.8 17 13.8 14.2 24.5s-13.8 17-24.5 14.2c-11-2.9-21.6-5-31.2-5.2c-7.9-.1-16 1.8-21.5 5c-4.8 2.8-6.2 5.6-6.2 9.3c0 1.8 .1 3.5 5.3 6.7c6.3 3.8 15.5 6.7 28.3 10.5l.7 .2c11.2 3.4 25.6 7.7 37.1 15c12.9 8.1 24.3 21.3 24.6 41.6c.3 20.9-10.5 36.1-24.8 45c-7.2 4.5-15.2 7.3-23.2 9V360c0 11-9 20-20 20s-20-9-20-20V345.4c-10.3-2.2-20-5.5-28.2-8.4l0 0 0 0c-2.1-.7-4.1-1.4-6.1-2.1c-10.5-3.5-16.1-14.8-12.6-25.3s14.8-16.1 25.3-12.6c2.5 .8 4.9 1.7 7.2 2.4c13.6 4.6 24 8.1 35.1 8.5c8.6 .3 16.5-1.6 21.4-4.7c4.1-2.5 6-5.5 5.9-10.5c0-2.9-.8-5-5.9-8.2c-6.3-4-15.4-6.9-28-10.7l-1.7-.5c-10.9-3.3-24.6-7.4-35.6-14c-12.7-7.7-24.6-20.5-24.7-40.7c-.1-21.1 11.8-35.7 25.8-43.9c6.9-4.1 14.5-6.8 22.2-8.5V152c0-11 9-20 20-20s20 9 20 20z"></path>

                </svg>
                <span class="ml-3 text-2xl">Cuentas por cobrar</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('cobrarcuenta.index')}}">Regresar</a>
            </nav>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="block rounded-3xl bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                <div class="p-6">
                    <h5 class="mb-2 text-2xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        Formulario de registro de facturas de cuentas por cobrar
                    </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        Ingrese los campos solicitados

                    <form method="POST" action="{{ route('cobrarcuenta.store') }}">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="cliente_id" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Cliente
                                </label>
                                <select require name="cliente_id" class="block w-full py-2 px-4 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-400 dark:focus:border-indigo-600 focus:ring-red-400 dark:focus:ring-indigo-600 rounded-2xl shadow-lg">
                                    <option selected>Seleccionar Proveedor</option>
                                    @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }} |
                                        {{ $cliente->rfc }} | {{ $cliente->telefono }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-input-label for="numero_factura" :value="__('Número de factura')" />
                                <x-text-input id="numero_factura" name="numero_factura" type="number" class="mt-1 block w-full" :value="old('numero_factura')" required autocomplete="numero_factura" placeholder="Ingresa número de la factura" />
                                <x-input-error class="mt-2" :messages="$errors->get('numero_factura')" />
                            </div>
                            <div>
                                <label for="fecha_emision" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                                    Fecha de emisión
                                </label>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="fecha_emision" datepicker datepicker-autohide type="text" datepicker datepicker-format="yyyy-mm-dd" class=" shadow border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecciona fecha de emisión">
                                </div>
                            </div>
                            <div>
                                <label for="fecha_vencimiento" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                                    Fecha de vencimiento
                                </label>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="fecha_vencimiento" datepicker datepicker-autohide type="text" datepicker datepicker-format="yyyy-mm-dd" class=" shadow border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecciona fecha de vencimineto">
                                </div>
                            </div>

                            <div>
                                <x-input-label for="monto_total" :value="__('Monto total')" />
                                <x-text-input id="monto_total" name="monto_total" type="number" class="mt-1 block w-full" :value="old('monto_total')" required autocomplete="monto_total" placeholder="Ingresa monto total de la factura" />
                                <x-input-error class="mt-2" :messages="$errors->get('monto_total')" />
                            </div>
                            <div>
                                <x-input-label for="monto_pagado" :value="__('Monto pagado')" />
                                <x-text-input id="monto_pagado" name="monto_pagado" type="number" class="mt-1 block w-full" :value="old('monto_pagado')" required autocomplete="monto_pagado" placeholder="Ingresa monto pagado de la factura" />
                                <x-input-error class="mt-2" :messages="$errors->get('monto_pagado')" />
                            </div>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-1">
                            <x-input-label for="detalles_adicionales" :value="__('Detalles Adicionales')" />
                            <x-text-input id="detalles_adicionales" name="detalles_adicionales" type="text" class="mt-1 block w-full" :value="old('detalles_adicionales')" required autocomplete="detalles_adicionales" placeholder="Ingresa detalles de la factura" />
                            <x-input-error class="mt-2" :messages="$errors->get('detalles_adicionales')" />
                        </div>
                        <div>
                            <div class="mb-6 ">

                                <h2 class="text-xl font-bold mb-4 text-center">Estatus</h2>

                                <div class="flex items-center justify-center">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus" value="Pagada">
                                        <span class="ml-2 text-gray-700">Pagada</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus" value="Pendiente">
                                        <span class="ml-2 text-gray-700">Pendiente</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        </p>
                        <div class="flex justify-center">
                            <div class="text-center lg:text-center">
                                <a href="{{route('cobrarcuenta.index')}}">
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