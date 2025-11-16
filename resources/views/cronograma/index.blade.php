<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar cronogramas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <h2 class="text-center mt-3">Administrar cronogramas:</h2>

    <div class="container mt-4">

        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('cronograma.create') }}" class="btn btn-success">
                Agregar tarea
            </a>
        </div>

        <table class="table table-striped table-hover align-middle shadow-sm">
            <thead class="encabezado">
                <tr>
                    <th>ID</th>
                    <th>Pauta</th>
                    <th>Duración</th>
                    <th>Publicidad</th>
                    <th class="text-end acciones-th">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @forelse($cronogramas as $cronograma)
                    <tr>
                        <td>{{ $cronograma->id }}</td>
                        <td>{{ $cronograma->pauta ?? '-' }}</td>
                        <td>{{ $cronograma->duracion ?? '-' }}</td>
                        <td>{{ $cronograma->publicidad ?? '-' }}</td>

                        <td class="text-end">
                            <form action="{{ route('cronograma.destroy', $cronograma->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Seguro quieres eliminar esta tarea?')">
                                    Borrar tarea
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-3">No hay tareas registradas</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>