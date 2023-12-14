<!-- resources/views/productos/index.blade.php -->
<form id="form-busqueda">
    <input type="text" id="input-busqueda" placeholder="Buscar por nombre...">
    <button type="submit">Buscar</button>
</form>

<table id="tabla-productos">

    <!-- resources/views/productos/tabla_resultados.blade.php -->
    @if ($resultados->isEmpty())
    <tr>
        <td colspan="3">No se encontraron resultados</td>
    </tr>
    @else
    @foreach ($resultados as $producto)
    <tr>
        <td>{{ $producto->id }}</td>
        <td>{{ $producto->nombre }}</td>
        <td>{{ $producto->telefono }}</td>
        <!-- Mostrar otros campos del producto si es necesario -->
    </tr>
    @endforeach
    @endif
    <script>
        $(document).ready(function() {
            $('#form-busqueda').submit(function(event) {
                event.preventDefault(); // Evita que el formulario se envíe normalmente

                var searchTerm = $('#input-busqueda').val(); // Obtiene el término de búsqueda

                // Realiza una solicitud AJAX al servidor
                $.ajax({
                    type: 'GET',
                    url: '/buscar-producto',
                    data: {
                        q: searchTerm
                    },
                    success: function(response) {
                        $('#tabla-productos').html(response); // Actualiza la tabla con los resultados
                    },
                    error: function(err) {
                        console.error(err);
                    }
                });
            });
        });
    </script>