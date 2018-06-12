{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dvorana Admin panel')

@section('content_header')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Fakultet</a></li>
    <li class="breadcrumb-item"><a href="/dvorana">Dvorana</a></li>
    <li class="breadcrumb-item active" aria-current="#">{{ $dvo->naziv}}</li>
  </ol>
</nav>
    <h1>Dvorana {{ $dvo->naziv}}</h1>
@stop

@section('content')
  
Naziv: <span style="font-style: italic">{{ $dvo->naziv}} </span><br>
Datum kreiranja: {{ $dvo->created_at}} <br>
Broj: {{ $dvo->id}} <br>

<br>
<div class="col-xs-6 col-sm-6 col-md-6">
  <a href="/dvorana/{{ $dvo->id}}/edit" class="btn btn-lg btn-success btn-block">Edit</a>

					</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

