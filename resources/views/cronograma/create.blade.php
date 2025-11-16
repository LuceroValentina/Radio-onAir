@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nueva tarea</h1>

        <form action="{{ route('cronograma.store') }}" method="POST">
            @csrf

            <label>Pauta (HH:MM):</label>
            <input type="time" name="pauta" class="form-control mb-2" required>

            <label>Duración (HH:MM):</label>
            <input type="time" name="duracion" class="form-control mb-2" required>

            <label>Publicidad (HH:MM):</label>
            <input type="time" name="publicidad" class="form-control mb-2" required>

            <button class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
