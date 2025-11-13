<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\CronogramaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Página de bienvenida
Route::get('/', fn() => view('welcome'));

// Rutas protegidas por login
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard general
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    // Dashboards por tipo de usuario (si quieres)
    Route::get('/admin/dashboard', fn() => view('dashboard.admin'))->name('admin.dashboard');
    Route::get('/tecnico/dashboard', fn() => view('dashboard.tecnico'))->name('tecnico.dashboard');
    Route::get('/movil/dashboard', fn() => view('dashboard.movil'))->name('movil.dashboard');
    Route::get('/television/dashboard', fn() => view('dashboard.television'))->name('television.dashboard');
    Route::get('/radio/dashboard', fn() => view('dashboard.radio'))->name('radio.dashboard');

    // Usuarios (solo si querés que estén protegidos)
    Route::get('/usuarios/crear', [UserController::class, 'create'])->name('users.create');
    Route::post('/usuarios', [UserController::class, 'store'])->name('users.store');

    // Equipos CRUD sin control de roles
    Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos.index');
    Route::resource('equipos', EquipoController::class);
    Route::get('/equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
    Route::post('/equipos', [EquipoController::class, 'store'])->name('equipos.store');
    Route::get('/equipos/{equipo}', [EquipoController::class, 'show'])->name('equipos.show');
    Route::get('/equipos/{equipo}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');
    Route::put('/equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
    Route::delete('/equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');

    // Rutas cronogramas
     Route::get('/cronograma', [CronogramaController::class, 'index'])->name('cronograma.index');
    Route::get('/cronograma/create', [CronogramaController::class, 'create'])->name('cronograma.create');
    Route::post('/cronograma', [CronogramaController::class, 'store'])->name('cronograma.store');
    Route::get('/cronograma/{cronograma}', [CronogramaController::class, 'show'])->name('cronograma.show');
    Route::get('/cronograma/{cronograma}/edit', [CronogramaController::class, 'edit'])->name('cronograma.edit');
    Route::put('/cronograma/{cronograma}', [CronogramaController::class, 'update'])->name('cronograma.update');
    Route::delete('/cronograma/{cronograma}', [CronogramaController::class, 'destroy'])->name('cronograma.destroy');

});

require __DIR__ . '/auth.php';
//despues ver si lo puedo hacer por rol tipon restringir las url