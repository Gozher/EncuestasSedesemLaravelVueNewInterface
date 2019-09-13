@extends('template.layout')

@section('content')


@php($NoEntrevistados = ($varTotal-$varEntrevistados) / $varTotal * 100)
@php($Entrevistados = $varEntrevistados / $varTotal * 100)  




<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(dibujarGrafico);
function dibujarGrafico() {
// Tabla de datos: valores y etiquetas de la gráfica
var data = google.visualization.arrayToDataTable([
['Texto', 'Entrevistados',{ role: 'annotation' }],
@foreach($pregunta1 as $pre1)
@php( $porcentaje  = ($pre1->fk_respuesta / $varTotal) * 100)  // se creo aqui la variable por la cuestion del ciclo
['{{$pre1->respuesta}}', {{$pre1->fk_respuesta}},'{{ round($porcentaje,2)}}%'],
@endforeach
]);
var options = {
title: '{{$titulo->pregunta}}'
//Ejemplo con Google Charts: Gráfico de barras
}
// Dibujar el gráfico
new google.visualization.ColumnChart(
//ColumnChart sería el tipo de gráfico a dibujar
document.getElementById('GraficoGoogleChart-ejemplo-1')
).draw(data, options);
}
</script>
</head> 



<div class="row">
<div class="col-sm-6">

  <div class="form-group">
        
    <form action="/graf" method="post">
          {{ csrf_field() }}

      <div class="col-sm-10">
        <div class="form-group">
          <label>Seleccione grafica</label>

          <select class="form-control" name="cantidad">

            @foreach($preguntas as $pre)
              <option value="{{ $pre->id}}"> pregunta {{ $pre->id}}: {{ $pre->pregunta}}</option>   			
            @endforeach
          </select>   
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block">Mostrar</button>              
      </div>

          
    </form>

  </div>    
</div>
<div class="col-sm-6">
<br>


<table class="table table-sm">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Criterio</th>
      <th scope="col">Unidades</th>
      <th scope="col">Procentaje</th>
    </tr>
  </thead>
  <tbody>

    <tr>    
      <td>Total de la Muestra</td>
      <td>{{$varTotal}}</td>
      <td>100%</td>
    </tr>

    <tr>    
      <td>Entrevistados</td>
      <td>{{$varEntrevistados}}</td>                  
      <td>{{round($Entrevistados,2)}}%</td>
    </tr>

    <tr>    
      <td>No Entrevistados</td>
      <td>{{($varTotal-$varEntrevistados)}}</td>      
      <td>{{round($NoEntrevistados,2)}}%
    </tr>

  </tbody>
</table>
</div>
</div>


<div class="row justify-content-center">
    <div id="GraficoGoogleChart-ejemplo-1" style="width: 900px; height: 400px"></div>
</div>

    



@endsection




