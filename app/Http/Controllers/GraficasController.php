<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Graficas;
use App\Preguntas;
use App\Encuesta;
use Illuminate\Http\Request;

class GraficasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {               
        $cantidad = $request->input("cantidad");

        $pregunta1 = Encuesta::
        join('preguntas', 'encuestas.fk_pregunta', '=', 'preguntas.id')
        ->join('respuestas', 'encuestas.fk_respuesta', '=', 'respuestas.id')
        ->select('respuestas.respuesta',DB::raw('COUNT(encuestas.fk_respuesta) as fk_respuesta'),'preguntas.id')
        ->where('encuestas.fk_pregunta','=',$cantidad)        
        ->groupBy('encuestas.fk_respuesta','preguntas.id','respuestas.respuesta')               
        ->get();

        $preguntas = Preguntas::where('status','=',1)->get();
        
        $titulo = Preguntas::find($cantidad);

        return view('Graficas',compact('pregunta1','preguntas','titulo'));            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                         
        $preguntas = Preguntas::where('status','=',1)->get();                       
          return view('graficasPost',compact('preguntas'));

        //return view('Graficas');                
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Graficas  $graficas
     * @return \Illuminate\Http\Response
     */
    public function show(Graficas $graficas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Graficas  $graficas
     * @return \Illuminate\Http\Response
     */
    public function edit(Graficas $graficas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Graficas  $graficas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Graficas $graficas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Graficas  $graficas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graficas $graficas)
    {
        //
    }
}

