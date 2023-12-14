<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM64 80c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16zm128 72c8.8 0 16 7.2 16 16v17.3c8.5 1.2 16.7 3.1 24.1 5.1c8.5 2.3 13.6 11 11.3 19.6s-11 13.6-19.6 11.3c-11.1-3-22-5.2-32.1-5.3c-8.4-.1-17.4 1.8-23.6 5.5c-5.7 3.4-8.1 7.3-8.1 12.8c0 3.7 1.3 6.5 7.3 10.1c6.9 4.1 16.6 7.1 29.2 10.9l.5 .1 0 0 0 0c11.3 3.4 25.3 7.6 36.3 14.6c12.1 7.6 22.4 19.7 22.7 38.2c.3 19.3-9.6 33.3-22.9 41.6c-7.7 4.8-16.4 7.6-25.1 9.1V440c0 8.8-7.2 16-16 16s-16-7.2-16-16V422.2c-11.2-2.1-21.7-5.7-30.9-8.9l0 0c-2.1-.7-4.2-1.4-6.2-2.1c-8.4-2.8-12.9-11.9-10.1-20.2s11.9-12.9 20.2-10.1c2.5 .8 4.8 1.6 7.1 2.4l0 0 0 0 0 0c13.6 4.6 24.6 8.4 36.3 8.7c9.1 .3 17.9-1.7 23.7-5.3c5.1-3.2 7.9-7.3 7.8-14c-.1-4.6-1.8-7.8-7.7-11.6c-6.8-4.3-16.5-7.4-29-11.2l-1.6-.5 0 0c-11-3.3-24.3-7.3-34.8-13.7c-12-7.2-22.6-18.9-22.7-37.3c-.1-19.4 10.8-32.8 23.8-40.5c7.5-4.4 15.8-7.2 24.1-8.7V232c0-8.8 7.2-16 16-16z"></path>

                </svg>
                <span class="ml-3 text-2xl">Cuentas por pagar</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('pagarcuenta.index')}}">Regresar</a>
            </nav>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="block rounded-3xl bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                <div class="p-6">
                    <h5 class="mb-2 text-2xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        Formulario de registro de factura de la cuenta por pagar
                    </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        Ingrese los campos solicitados

                    <form method="POST" action="{{ route('pagarcuenta.store') }}">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="proveedor_id" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Seleccione el proveedor
                                </label>
                                <select require name="proveedor_id" class="block w-full py-2 px-4 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-400 dark:focus:border-indigo-600 focus:ring-red-400 dark:focus:ring-indigo-600 rounded-2xl shadow-lg">
                                    <option selected>Seleccionar Proveedor</option>
                                    @foreach ($proveedors as $proveedor)
                                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }} |
                                        {{ $proveedor->rfc }} | {{ $proveedor->telefono }}
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
                                <a href="{{route('pagarcuenta.index')}}">
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