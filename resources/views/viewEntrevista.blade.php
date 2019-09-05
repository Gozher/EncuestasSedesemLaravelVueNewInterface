<head>
<meta name="csrf-token" content="{{ csrf_token() }}"> 
</head>

@extends('template.layout2')

@section('content')

    <div id="app" class="content">
        <encuesta-component></encuesta-component>
    </div>
    <script src="{{asset('js/app.js')}}"></script> 

      <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

@endsection

