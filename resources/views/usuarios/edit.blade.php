@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Usuario</h1>

    <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
        @csrf @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="name" class="form-control mb-2" value="{{ $usuario->name }}" required>

        <label>Email:</label>
        <input type="email" name="email" class="form-control mb-2" value="{{ $usuario->email }}" required>

        <label>Cargo:</label>
        <select name="cargo_id" class="form-control mb-3" required>
            @foreach($cargos as $cargo)
                <option value="{{ $cargo->id }}" @selected($cargo->id == $usuario->cargo_id)>
                    {{ $cargo->nombre }}
                </option>
            @endforeach
        </select>

        <button class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
