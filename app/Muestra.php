<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muestra extends Model
{
    //
    public  $table = "muestras";
    protected $fillable = ['FolioRel','Municipio','ApellidoPaterno','ApellidoMaterno',
    'Nombre','genero','localidad','colonia','calle','NumInt','NumExt','otraRef','Telefono','Celular'];
}
