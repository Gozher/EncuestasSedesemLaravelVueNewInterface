<?php

namespace App\Http\Controllers;

use App\Preguntas;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pre= Preguntas::get();
        return $pre;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Preguntas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pregunta = new Preguntas();
        $pregunta->pregunta = $request->pregunta;
        $pregunta->status = $request->status;        
        $pregunta->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pregunta = Preguntas::find($id);        
        return $pregunta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function edit(Preguntas $preguntas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){ }

    public function updateQuestions(Request $request)
    {
        $pregunta = preguntas::findOrFail($request->id);
        $pregunta->pregunta = $request->pregunta;               
        $pregunta->save();
        return $pregunta;
    }

    public function updateStatusQuestions(Request $request)
    {
        $pregunta = preguntas::findOrFail($request->id);
        $pregunta->status = $request->status;               
        $pregunta->save();
        return $pregunta;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pregunta = Preguntas::find($id);
        $pregunta->delete();
        return $pregunta;
    }
}
