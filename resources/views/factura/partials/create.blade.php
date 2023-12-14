<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[61px] h-[61px] fill-[#d20f0f]" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>

                </svg>
                <span class="ml-3 text-2xl">Facturas</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('factura.index')}}">Regresar</a>
            </nav>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="block rounded-3xl bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                <div class="p-6">
                    <h5 class="mb-2 text-2xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        Formulario de registro de facturas
                    </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        Ingrese los campos solicitados

                    <form method="POST" action="{{ route('factura.store') }}">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="proveedor_id" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Proveedor
                                </label>
                                <select require name="proveedor_id" class="block w-full py-2 px-4 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-400 dark:focus:border-indigo-600 focus:ring-red-400 dark:focus:ring-indigo-600 rounded-2xl shadow-lg">
                                    <option selected>Seleccionar Proveedor</option>
                                    @foreach ($proveedors as $proveedor)
                                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }} -
                                        {{ $proveedor->rfc }} - {{ $proveedor->telefono }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-input-label for="numero_factura" :value="__('Numero de factura')" />
                                <x-text-input id="numero_factura" name="numero_factura" type="number" class="mt-1 block w-full" :value="old('numero_factura')" required autocomplete="numero_factura" placeholder="Ingresa numero de la factura" />
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
                                    <input name="fecha_factura" datepicker datepicker-autohide type="text" datepicker datepicker-format="yyyy-mm-dd" class=" shadow border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-red-500 focus:border-red-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Selecciona fecha de factura">
                                </div>
                            </div>

                            <div>
                                <x-input-label for="monto_factura" :value="__('Monto de la factura')" />
                                <x-text-input id="monto_factura" name="monto_factura" type="number" class="mt-1 block w-full" :value="old('monto_factura')" required autocomplete="monto_factura" placeholder="Ingresa monto de la factura" />
                                <x-input-error class="mt-2" :messages="$errors->get('monto_factura')" />
                            </div>
                            <div>
                                <x-input-label for="detalles_factura" :value="__('Detalle de la factura')" />
                                <x-text-input id="detalles_factura" name="detalles_factura" type="text" class="mt-1 block w-full" :value="old('detalles_factura')" required autocomplete="detalles_factura" placeholder="Ingresa detalles de la factura" />
                                <x-input-error class="mt-2" :messages="$errors->get('detalles_factura')" />
                            </div>
                            <div>
                                <div class="mb-6 ">

                                    <h2 class="text-xl font-bold mb-4 text-center">Estatus</h2>

                                    <div class="flex items-center justify-center">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus_factura" value="Pagada">
                                            <span class="ml-2 text-gray-700">Pagada</span>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus_factura" value="Pendiente">
                                            <span class="ml-2 text-gray-700">Pendiente</span>
                                        </label>
                                    </div>
                                </div>
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
                </div>

            </div>

        </div>
    </div>
</x-app-layout>