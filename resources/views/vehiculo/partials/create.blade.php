<x-app-layout>
    <x-slot name="header">
        <div class="container mx-auto flex flex-wrap p-1 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg class="w-[50px] h-[50px] fill-[#d22d2d]" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M64 32C28.7 32 0 60.7 0 96V304v80 16c0 44.2 35.8 80 80 80c26.2 0 49.4-12.6 64-32c14.6 19.4 37.8 32 64 32c44.2 0 80-35.8 80-80c0-5.5-.6-10.8-1.6-16H416h33.6c-1 5.2-1.6 10.5-1.6 16c0 44.2 35.8 80 80 80s80-35.8 80-80c0-5.5-.6-10.8-1.6-16H608c17.7 0 32-14.3 32-32V288 272 261.7c0-9.2-3.2-18.2-9-25.3l-58.8-71.8c-10.6-13-26.5-20.5-43.3-20.5H480V96c0-35.3-28.7-64-64-64H64zM585 256H480V192h48.8c2.4 0 4.7 1.1 6.2 2.9L585 256zM528 368a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM176 400a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM80 368a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>

                </svg>
                <span class="ml-3 text-2xl">Vehículos</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-red-600	flex flex-wrap items-center text-lg justify-center">
                <a class="mr-5 hover:text-red-600" href="{{route('vehiculo.index')}}">Regresar</a>
            </nav>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="block rounded-3xl bg-white text-center shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">

                <div class="p-6">
                    <h5 class="mb-2 text-2xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        Formulario de registro de vehículos
                    </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        Ingrese los campos solicitados

                    <form method="POST" action="{{ route('vehiculo.store') }}">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <x-input-label for="marca" :value="__('Marca')" />
                                <x-text-input id="marca" name="marca" type="text" class="mt-1 block w-full" :value="old('marca')" required autofocus autocomplete="marca" placeholder="Ingresa marca" />
                                <x-input-error class="mt-2" :messages="$errors->get('marca')" />
                            </div>

                            <div>
                                <x-input-label for="modelo" :value="__('Modelo')" />
                                <x-text-input id="modelo" name="modelo" type="text" class="mt-1 block w-full" :value="old('modelo')" required autocomplete="modelo" placeholder="Ingresa modelo" />
                                <x-input-error class="mt-2" :messages="$errors->get('modelo')" />
                            </div>

                            <div>
                                <x-input-label for="serie" :value="__('Serie')" />
                                <x-text-input id="serie" name="serie" type="text" class="mt-1 block w-full" :value="old('serie')" required autocomplete="serie" placeholder="Ingresa la serie" />
                                <x-input-error class="mt-2" :messages="$errors->get('serie')" />
                            </div>

                            <div>
                                <x-input-label for="year" :value="__('Año')" />
                                <x-text-input id="year" name="year" type="number" class="mt-1 block w-full" :value="old('year')" required autocomplete="year" placeholder="Ingresa el año" />
                                <x-input-error class="mt-2" :messages="$errors->get('year')" />
                            </div>
                            <div>
                                <x-input-label for="placas" :value="__('Placas')" />
                                <x-text-input id="placas" name="placas" type="text" class="mt-1 block w-full" :value="old('placas')" required autocomplete="placas" placeholder="Ingresa la placa" />
                                <x-input-error class="mt-2" :messages="$errors->get('placas')" />
                            </div>
                            <div>
                                <x-input-label for="kilometros" :value="__('Kilometraje')" />
                                <x-text-input id="kilometros" name="kilometros" type="text" class="mt-1 block w-full" :value="old('kilometros')" required autocomplete="kilometros" placeholder="Ingresa kilometros" />
                                <x-input-error class="mt-2" :messages="$errors->get('kilometros')" />
                            </div>
                        </div>
                        <div>
                            <div class="mb-6 ">

                                <h2 class="text-xl font-bold mb-4 text-center">Estatus</h2>

                                <div class="flex items-center justify-center">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus" value="Disponible" checked>
                                        <span class="ml-2 text-gray-700">Disponible</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio h-5 w-5 text-red-600" name="estatus" value="No Disponible">
                                        <span class="ml-2 text-gray-700">No disponible</span>
                                    </label>
                                </div>
                            </div>


                        </div>
                        </p>
                        <div class="flex justify-center">
                            <div class="text-center lg:text-center">
                                <a href="{{route('vehiculo.index')}}">
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