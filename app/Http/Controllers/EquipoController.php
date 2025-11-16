<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $buscar = $request->input('buscar');

        $equipos = Equipo::when($buscar, function ($query, $buscar) {
            return $query->where('nombre', 'like', "%{$buscar}%")
                ->orWhere('tipo', 'like', "%{$buscar}%")
                ->orWhere('cantidad', 'like', "%{$buscar}%");
        })->get();

        return view('equipos.index', compact('equipos', 'buscar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedDatos = $request->validate([
            'tipo' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
            'nombre' => 'required|string|max:255',
        ]);

        Equipo::create($validatedDatos);

        return redirect()->route('equipos.index')->with('success', 'Equipo creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        return view('equipos.show', compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('equipos.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
        $validatedData = $request->validate([
            'tipo' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
            'nombre' => 'required|string|max:255',
        ]);

        $equipo->update($validatedData);

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado correctamente.');
    }


    public function retirarForm(Equipo $equipo)
    {
        return view('equipos.retirar', compact('equipo'));
    }

    public function retirar(Request $request, Equipo $equipo)
    {
        $request->validate([
            'retirado_por' => 'required|string|max:255',
            'motivo' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
        ]);

        $equipo->update([
            'retirado_por' => $request->retirado_por,
            'motivo_retiro' => $request->motivo,
            'estado' => $request->estado,
        ]);

        return redirect()->route('equipos.index')->with('success', 'Equipo retirado correctamente.');
    }


}
