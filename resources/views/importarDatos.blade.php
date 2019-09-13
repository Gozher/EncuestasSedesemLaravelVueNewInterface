
@extends('template.layout')

@section('content')

@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif



<div class="row">
    <form method="post" action="/import-excel" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" name="excel">
        <br><br>
        <input type="submit" value="Enviar" style="padding: 10px 20px;">
    </form>
</div>

@endsection
