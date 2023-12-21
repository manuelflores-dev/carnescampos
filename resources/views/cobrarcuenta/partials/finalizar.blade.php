<header>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        {{ __('Finalizar factura de la cuenta por cobrar') }}
    </h2>
    <p>
        Información previa
    </p>
    <div class="grid gap-6 mb-6 md:grid-cols-3">
        <div>
            <x-input-label for="monto_pagado" :value="__('Monto total de la factura')" />
            <x-text-input disabled id="monto_pagado" type="number" class="mt-1 block w-full" :value=" old('monto_total', $cobrarcuenta->monto_total) " />
        </div>
        <div>
            <x-input-label for="monto_pagado" :value="__('Monto pagado anteriormente')" />
            <x-text-input disabled id="monto_pagado" type="number" class="mt-1 block w-full" :value=" old('monto_pagado', $cobrarcuenta->monto_pagado) " />
        </div>
    </div>
    <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-red-800 to-transparent opacity-25 dark:opacity-100" />
    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
</header>
<form action="{{ route('cobrarcuenta.finalizar', ['id' => $cobrarcuenta->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <p class="text-md">
        Ingrese nuevo monto
    </p>
    <div class="grid gap-6 mb-6 md:grid-cols-1">
        <div>
            <x-input-label for="monto_pagado" :value="__('Monto pagado')" />
            <x-text-input autofocus id="monto_pagado" name="monto_pagado" type="number" class="mt-1 block w-full" />
            <x-input-error class="mt-2" :messages="$errors->get('monto_pagado')" />
        </div>
    </div>
    <div class="text-center lg:text-center">
        <x-primary-button class="ml-3">
            Finalizar
        </x-primary-button>
    </div>
</form>