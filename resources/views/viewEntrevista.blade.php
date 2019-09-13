<head>
<meta name="csrf-token" content="{{ csrf_token() }}"> 
</head>

@extends('template.layout2')

@section('content')

    <div id="app" class="content">
        <encuesta-component></encuesta-component>
    </div>
    <script src="{{asset('js/app.js')}}"></script> 


@endsection

