@extends('template.layout2')

@section('content')

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
