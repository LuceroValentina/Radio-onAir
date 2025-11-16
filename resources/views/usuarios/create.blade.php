@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Usuario</h1>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="name" class="form-control mb-2" required>

        <label>Email:</label>
        <input type="email" name="email" class="form-control mb-2" required>

        <label>Cargo:</label>
        <select name="cargo_id" class="form-control mb-3" required>
            @foreach($cargos as $cargo)
                <option value="{{ $cargo->id }}">{{ $cargo->nombre }}</option>
            @endforeach
        </select>

        <button class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
