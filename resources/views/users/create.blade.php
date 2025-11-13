@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear nuevo usuario</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <div>
            <label>Nombre</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label>Contraseña</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label>Confirmar contraseña</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <div>
            <label>Rol</label>
            <select name="role">
                <option value="admin">Admin</option>
                <option value="docente">Docente</option>
                <option value="preceptor">Preceptor</option>
            </select>
        </div>

        <button type="submit">Registrar</button>
    </form>
</div>
@endsection
