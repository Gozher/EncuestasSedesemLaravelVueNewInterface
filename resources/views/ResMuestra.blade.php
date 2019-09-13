
<head>
<meta name="csrf-token" content="{{ csrf_token() }}"> 
</head>
@extends('template.layout')

@section('content')

    <div id="app" class="content">
    
        <muestra-component></muestra-component>
        
        
    </div>

    <script src="{{asset('js/app.js')}}"></script> 
        

@endsection
