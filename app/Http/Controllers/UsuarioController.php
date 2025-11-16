<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cargo;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::with('cargo')->get();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        $cargos = Cargo::all();
        return view('usuarios.create', compact('cargos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'cargo_id' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'cargo_id' => $request->cargo_id,
            'password' => bcrypt('12345678'), 
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit(User $usuario)
    {
        $cargos = Cargo::all();
        return view('usuarios.edit', compact('usuario', 'cargos'));
    }

    public function update(Request $request, User $usuario)
    {
        $usuario->update($request->all());
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado.');
    }
}
