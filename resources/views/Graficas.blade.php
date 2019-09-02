@extends('template.layout2')

@section('content')


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
['Texto', 'Entrevistados'],
@foreach($pregunta1 as $pre1)
['{{$pre1->respuesta}}', {{$pre1->fk_respuesta}}],
@endforeach
]);
var options = {
title: ''
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




<div class="col-sm-6">
      <div class="form-group">
        
    <form action="/graf" method="post">
        {{ csrf_field() }}

        <div class="col-sm-10">
      <div class="form-group">
        <label>Seleccione grafica</label>

        <select class="form-control" name="cantidad">

          @foreach($preguntas as $pre)
            <option value="{{ $pre->id}}"> pregunta ({{ $pre->id}}) {{ $pre->pregunta}}</option>   			
          @endforeach
        </select>   
      </div>

    </div>

        <button type="submit" class="btn btn-success btn-lg btn-block">Mostrar</button>              
    </form>

  
      </div>      

    </div>

    <div id="GraficoGoogleChart-ejemplo-1" style="width: 800px; height: 600px"></div>



@endsection



