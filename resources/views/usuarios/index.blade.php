@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Usuarios</h1>

    <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">Nuevo Usuario</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($usuarios as $u)
            <tr>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->cargo->nombre ?? 'Sin cargo' }}</td>

                <td>
                    <a href="{{ route('usuarios.edit', $u) }}" class="btn btn-warning btn-sm">Editar</a>

                    <form action="{{ route('usuarios.destroy', $u) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar usuario?')">
                            Borrar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection
