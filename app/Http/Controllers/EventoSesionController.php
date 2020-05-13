<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Sesion;
use Illuminate\Http\Request;

class EventoSesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function index(Evento $evento)
    {
        $sesiones = $evento->sesiones;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function create(Evento $evento)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Evento $evento)
    {
        $request->validate([
            'descripcion' => ['required', 'max:255'],
            'inicio' => ['required', 'date'],
        ]);

        $evento->sesiones()->create($request->all());
        
        return redirect()->route('evento.show', $evento->id)
            ->with(['mensaje' => 'Sesión creada.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento, Sesion $sesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento, Sesion $sesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento, Sesion $sesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @param  \App\Sesion  $sesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento, Sesion $sesion)
    {
        //
    }
}
