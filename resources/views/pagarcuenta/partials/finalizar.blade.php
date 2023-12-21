<form action="{{ route('pagarcuenta.finalizar', ['id' => $pagarcuenta->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="grid gap-6 mb-6 md:grid-cols-1">
        <div>
            <x-input-label for="monto_pagado" :value="__('Monto pagado')" />
            <x-text-input autofocus id="monto_pagado" name="monto_pagado" type="number" class="mt-1 block w-full" :value=" old('monto_pagado', $pagarcuenta->monto_pagado) " required autocomplete="monto_pagado" placeholder="Kilometraje final" />
            <x-input-error class="mt-2" :messages="$errors->get('monto_pagado')" />
        </div>
    </div>
    <div class="text-center lg:text-center">
        <x-primary-button class="ml-3">
            Finalizar cuenta por pagar
        </x-primary-button>
    </div>
</form>