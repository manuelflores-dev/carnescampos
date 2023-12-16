<form action="{{ route('recorridos.finalizar', ['id' => $recorrido->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="kilometraje_final">Kilometraje Final:</label>
    <input type="number" id="kilometraje_regreso" name="kilometraje_regreso" required>

    <label for="costo_combustible">Costo de Combustible:</label>
    <input type="number" id="costo_combustible" name="costo_combustible" required>

    <label for="cantidad_combustible">Cantidad de Combustible:</label>
    <input type="number" id="cantidad_combustible" name="cantidad_combustible" required>

    <button type="submit">Finalizar Recorrido</button>
</form>