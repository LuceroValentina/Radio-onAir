<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index-equipos.css') }}">
    <style>
        .table thead.encabezado th {
            background-color: #1e90ff;
            color: white;
        }
    </style>
</head>
    <!--Se necesita un registro de los dispositivos y equipos disponibles, ya que se pueden encontrar en disponibles, en uso, reparación, o dañados.-->
<body>
    @php
        function resaltar($texto, $buscar)
        {
            if (!$buscar)
                return $texto;
            $buscar = preg_quote($buscar, '/');
            return preg_replace(
                "/($buscar)/i",
                '<span style="color: red; font-weight: bold; text-decoration: underline;">$1</span>',
                $texto
            );
        }
    @endphp

    <h2 class="text-center mt-3">Seleccione la opción:</h2>

    <div class="container mt-4">

        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('equipos.create') }}" class="btn btn-success">
                Agregar Equipo
            </a>
            <form action="{{ route('equipos.index') }}" method="GET" class="d-flex" role="search">
                <input class="form-control me-2" type="search" name="buscar" placeholder="Buscar equipo"
                    aria-label="Buscar" value="{{ $buscar ?? '' }}">
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </form>
        </div>

        <table class="table table-striped table-hover align-middle shadow-sm">
            <thead class="encabezado">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Cantidad</th>

                    <th class="text-end acciones-th">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($equipos as $equipo)
                    <tr>
                        <td>{!! resaltar($equipo->id ?? '-', $buscar) !!}</td>
                        <td>{!! resaltar($equipo->nombre ?? '-', $buscar) !!}</td>
                        <td>{!! resaltar($equipo->tipo ?? '-', $buscar) !!}</td>
                        <td>{!! resaltar($equipo->cantidad ?? '-', $buscar) !!}</td>
                        <td class="text-end">
                            <div class="d-flex justify-content-end gap-1">
                                <a href="{{ route('equipos.show', $equipo->id) }}"
                                    class="btn btn-sm btn-primary">Mostrar</a>
                                <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <button type="button" class="btn btn-sm btn-secondary">Retirar</button>
                                <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('¿Seguro quieres eliminar este equipo?')">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-3">No hay equipos registrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</body>

</html>