<?php

namespace App\Http\Controllers;

use App\Muestra;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    //


    public function importUsers(Request $request)
{

    Excel::load($request->excel, function($reader) {
 
        $excel = $reader->get();
 
        // iteracción
        $reader->each(function($row) {
 
            $user = new Muestra;
            //$user->name = $row->nombre;
            //$user->email = $row->email;

            $user->FolioRel        = $row->folio_relacionado;
            $user->Municipio       = $row->municipio;
            $user->ApellidoPaterno = $row->primer_ap;
            $user->ApellidoMaterno = $row->segundo_ap;
            $user->Nombre          = $row->nombres;
            $user->genero          = $row->genero;
            $user->localidad        = $row->localidad;
            $user->colonia          = $row->colonia;
            $user->calle            = $row->calle;
            $user->NumInt           = $row->num_int;
            $user->NumExt           = $row->num_ext;
            $user->otraRef          = $row->otra_referencia;
            $user->Telefono         = $row->telefono;
            $user->Celular          = $row->celular;
            $user->status           = 0;
            
            $user->save();
 
        });
    
    });
 
    //return "Terminado";
    return redirect()->route('importGet')->with('success','Se importo correctamente');
}


public function viewImport()
{

    return view('importarDatos');
}



}
