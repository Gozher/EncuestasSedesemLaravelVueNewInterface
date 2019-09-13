@extends('template.layout2')

@section('content')


@foreach($pregunta1 as $pre1)

   {{$pre1->respuesta }} --  cantidad:  {{$pre1->fk_respuesta}} --- {{ ($pre1->fk_respuesta / $varEntrevistados)*100}} <br>

@endforeach


<!--@foreach($cantidad as $cant)
@
    {{$cant->Programa}} --{{$cant->Nombre}} <br>

@endforeach-->


cantidad de la muestra total de registros por mes: {{$varTotal}} <br>
cantidad de la muestra  de entrevistados: {{$varEntrevistados}} <br>


@endsection