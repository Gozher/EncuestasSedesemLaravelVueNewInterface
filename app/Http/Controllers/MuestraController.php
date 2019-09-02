<?php

namespace App\Http\Controllers;

use App\Muestra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MuestraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $municipios= Auth::user()->municipio;        
        //$DatosMuestra = Muestra::where('Municipio',$municipios)->get();     return $DatosMuestra;
       $DatosMuestra = Muestra::where('Municipio',$municipios)->paginate(5);

            
        return [
            'pagination'=>[
                'total'        => $DatosMuestra->total(),
                'current_page' => $DatosMuestra->currentPage(),
                'per_page'     => $DatosMuestra->perPage(),
                'last_page'    => $DatosMuestra->lastPage(),
                'from'         => $DatosMuestra->firstItem(),
                'to'           => $DatosMuestra->lastPage(), 
            ],

            'DatosMuestra' => $DatosMuestra
        ];
    }

    public function GenMuestra(Request $request){

        $cantidad = $request->input("cantidad");                     
        $datos = Muestra::where('status','0')->get()->random($cantidad); 


        foreach($datos as $dato){
            $a = Muestra::find($dato->id);
            $a->status=1;
            $a->save();        
            }

            return redirect()->route('Muestra.create');         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ResMuestra');
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
     * @param  \App\Muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mu = Muestra::find($id);        
        return $mu;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function edit(Muestra $muestra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $beneficario = Muestra::findOrFail($request->id);
        $beneficario->status = $request->status;               
        $beneficario->save();
        return $beneficario;
        
    }

    /*public function updateStatusBeneficiario(Request $request)
    {
        //
        $beneficario = Muestra::findOrFail($request->id);
        $beneficario->status = $request->status;               
        $beneficario->save();
        return $beneficario;
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Muestra  $muestra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muestra $muestra)
    {
        //
    }
}
