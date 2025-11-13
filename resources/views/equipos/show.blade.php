<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F0F3BD;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-3">Detalle del Equipo</h1>
        <p><strong>ID del Equipo:</strong> {{ $equipo->id }}</p>
        <p><strong>Categoría:</strong> {{ $equipo->tipo ?? 'sin categoria' }}</p>
        <p><strong>Cantidad:</strong> {{ $equipo->cantidad }}</p>

        <a href="{{ route('equipos.index') }}">
            <button class="btn btn-sm btn-secondary">Volver al listado</button></a>
        <a href="{{ route('equipos.edit', $equipo->id) }}">
            <button class="btn btn-sm btn-warning">Editar</button></a>
        <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger" type="submit"
                onclick="return confirm('¿Seguro quieres eliminar este equipo?')">
                Eliminar
            </button>
        </form>
    </div>
</body>

</html>