<?php

namespace App\Http\Controllers;

use App\Models\Tiempo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TiempoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiempos = Tiempo::latest()->paginate(7);
        return view('index', ['tiempos' => $tiempos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'user_id' => 'required',
        // ])

        Tiempo::create($request->all());
        return redirect()->route('tiempos.index')->with('success', 'nuevo tiempo creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tiempo $tiempo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tiempo $tiempo)
    {
        return view('edit', ['tiempo' => $tiempo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tiempo $tiempo): RedirectResponse
    {
        $tiempo->update($request->all());
        return redirect()->route('tiempos.index')->with('success', 'tiempo editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tiempo $tiempo): RedirectResponse
    {
        $tiempo->delete();
        return redirect()->route('tiempos.index')->with('success', 'tiempo borrado correctamente');


    }
}
