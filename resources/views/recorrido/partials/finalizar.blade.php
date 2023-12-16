<form action="{{ route('recorridos.finalizar', ['id' => $recorrido->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="grid gap-6 mb-6 md:grid-cols-3">
        <div>
            <x-input-label for="kilometraje_regreso" :value="__('Kilometraje final')" />
            <x-text-input autofocus id="kilometraje_regreso" name="kilometraje_regreso" type="number" class="mt-1 block w-full" :value=" old('kilometraje_regreso', $recorrido->kilometraje_regreso) " required autocomplete="kilometraje_regreso" placeholder="Kilometraje final" />
            <x-input-error class="mt-2" :messages="$errors->get('area')" />
        </div>
        <div>
            <x-input-label required for="cantidad_combustible" :value="__('Cantidad de combustible')" />
            <x-text-input autofocus id="cantidad_combustible" name="cantidad_combustible" type="number" class="mt-1 block w-full" :value=" old('cantidad_combustible', $recorrido->cantidad_combustible) " required autocomplete="cantidad_combustible" placeholder="Cantidad de combustible" />
            <x-input-error class="mt-2" :messages="$errors->get('area')" />
        </div>
        <div>
            <x-input-label for="gasolinera" :value="__('Gasolinera')" />
            <x-text-input autofocus id="gasolinera" name="gasolinera" type="text" class="mt-1 block w-full" :value=" old('gasolinera', $recorrido->gasolinera) " required autocomplete="gasolinera" placeholder="Nombre de gasolinera" />
            <x-input-error class="mt-2" :messages="$errors->get('gasolinera')" />
        </div>
    </div>
    <div class="text-center lg:text-center">
        <x-primary-button class="ml-3">
            Finalizar recorrido
        </x-primary-button>
    </div>
</form>