<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/edit-equipos.css') }}">

</head>

<body>
    <div class="container mt-5 p-4 border rounded bg-light">
        <h1 class="text-center mb-4">Editar Equipo</h1>

        <form action="{{ route('equipos.update', $equipo->id) }}" method="POST" class="needs-validation " novalidate>
            @csrf
            @method('PUT')

            <div class="mb-3 form-group">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control"
                    value="{{ old('nombre', $equipo->nombre) }}" required>
            </div>

            <div class="mb-3 form-group">
                <label for="tipo" class="form-label">Tipo:</label>
                <input type="text" id="tipo" name="tipo" class="form-control"
                    value="{{ old('tipo', $equipo->tipo ?? '') }}" required>
            </div>

            <div class="mb-3 form-group">
                <label for="cantidad" class="form-label">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" class="form-control"
                    value="{{ old('cantidad', $equipo->cantidad ?? '') }}" required>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </form>
    </div>

</body>

</html>