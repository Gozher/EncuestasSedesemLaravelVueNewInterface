@extends('template.layout')

@section('content')

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
</div>
        
@endsection
