<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $times = Time::latest()->paginate(7);
        return view('index', ['times' => $times]);
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

        Time::create($request->all());
        return redirect()->route('times.index')->with('success', 'nuevo tiempo creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Time $time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Time $time)
    {
        return view('edit', ['time' => $time]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Time $time): RedirectResponse
    {
        $time->update($request->all());
        return redirect()->route('times.index')->with('success', 'tiempo editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Time $time): RedirectResponse
    {
        $time->delete();
        return redirect()->route('times.index')->with('success', 'tiempo borrado correctamente');


    }
}
