<?php

namespace App\Http\Controllers;

use App\Respuestas;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $respuestas = Respuestas::get();
        return $respuestas;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Respuestas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pregunta = new Respuestas();
        $pregunta->fk_pregunta= $request->fk_pregunta;
        $pregunta->respuesta = $request->respuesta;
        $pregunta->status = $request->status;        
        $pregunta->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        

        $respuesta = Respuestas::find($id);        
        return $respuesta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuestas $respuestas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuestas $respuestas){ }

    public function updateAnswer(Request $request)
    {
        $Respuesta = Respuestas::findOrFail($request->id);
        $Respuesta->respuesta = $request->respuesta;               
        $Respuesta->save();
        return $Respuesta;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Respuesta = Respuestas::find($id);
        $Respuesta->delete();
        return $Respuesta;
    }
}
