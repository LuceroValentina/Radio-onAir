<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F0F3BD;
        }
    </style>
</head>

<body>
    <h1 class="text-center mb-4">Ingrese el equipo:</h1>
    <div class="container">

        <form action="{{ route('equipos.store') }}" method="POST">
            @csrf

            <label for="tipo">Ingrese el tipo</label>
            <input class="form-control" type="text" id="tipo" name="tipo" required>

            <label for="cant">Ingrese la cantidad</label>
            <input class="form-control" type="number" id="cant" name="cantidad" required>

            <label for="name">Ingrese el nombre</label>
            <input class="form-control" type="text" id="name" name="nombre" required>

            <div class="container-botones">
                <button class="btn btn-sm btn-success mt-4" type="submit">Guardar</button>
            </div>
        </form>

    </div>
</body>

</html>