<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\GraficasPorcentajes;
use App\Encuesta;
use App\Muestra;
use Illuminate\Http\Request;

class GraficasPorcentajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cantidad = Muestra::whereBetween('created_at', ['2019-09-09','2019-09-11'])->get(); // total de la muestra por mes

        $varTotal = 0;
        $varEntrevistados = 0;
        foreach ($cantidad as $key => $can) {

            if($can->status == 1){
                $varEntrevistados++;
            }
            $varTotal++;
        }

        $pregunta1 = Encuesta::
        join('preguntas', 'encuestas.fk_pregunta', '=', 'preguntas.id')
        ->join('respuestas', 'encuestas.fk_respuesta', '=', 'respuestas.id')
        ->select('respuestas.respuesta',DB::raw('COUNT(encuestas.fk_respuesta) as fk_respuesta'),'preguntas.id')
        //->where('encuestas.fk_pregunta','=',$cantidad)        
        ->groupBy('encuestas.fk_respuesta','preguntas.id','respuestas.respuesta')               
        ->get();

        return view('Porcentajes',compact('pregunta1','cantidad','varTotal','varEntrevistados'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\GraficasPorcentajes  $graficasPorcentajes
     * @return \Illuminate\Http\Response
     */
    public function show(GraficasPorcentajes $graficasPorcentajes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GraficasPorcentajes  $graficasPorcentajes
     * @return \Illuminate\Http\Response
     */
    public function edit(GraficasPorcentajes $graficasPorcentajes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GraficasPorcentajes  $graficasPorcentajes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GraficasPorcentajes $graficasPorcentajes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GraficasPorcentajes  $graficasPorcentajes
     * @return \Illuminate\Http\Response
     */
    public function destroy(GraficasPorcentajes $graficasPorcentajes)
    {
        //
    }
}
