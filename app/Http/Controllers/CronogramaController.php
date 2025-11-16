<?php

namespace App\Http\Controllers;

use App\Models\Cronograma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CronogramaController extends Controller
{
    /**
     * Display a listing of the resource.  PROTEGER EL RESTO DE RUTAS PARA QUE NO PUEDA EDITAR LOS QUE YO NO QUIERA
     */
    public function index()
    {
        $usuario = Auth::user();
        $cronogramas = Cronograma::with('usuario')->get();

        return view('cronograma.index', [
            'cronogramas' => $cronogramas,
            'esAdmin' => $usuario->rol === 'admin',
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cronograma.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedDatos = $request->validate([
            'pauta' => $request->pauta,
            'duracion' => $request->duracion,
            'publicidad' => $request->publicidad,
            'usuario_id' => Auth::id(),
        ]);


        Cronograma::create($validatedDatos);

        return redirect()->route('cronograma.index')->with('success', 'Tarea creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cronograma $cronograma)
    {
        return view('cronograma.show', compact('cronograma'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cronograma = Cronograma::findOrFail($id);
        return view('cronograma.edit', compact('cronograma'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cronograma $cronograma)
    {
        $validatedDatos = $request->validate([
            'pauta' => 'required|string|max:255',
            'duracion' => 'required|integer|min:0',
            'publicidad' => 'required|string|max:255',
        ]);

        $cronograma->update($validatedDatos);

        return redirect()->route('cronograma.index')->with('success', 'Cronograma actualizado correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cronograma $cronograma)
    {
        $cronograma->delete();

        return redirect()->route('cronograma.index')->with('success', 'Tarea eliminada correctamente.');
    }
}
