{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dvorane Admin panel')

@section('content_header')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Fakultet</a></li>
    <li class="breadcrumb-item"><a href="/dvorana">Dvorane</a></li>
    
  </ol>
</nav>
    <h1>Dodaj novu dvoranu</h1>
@stop

@section('content')

<form  action="{{action('DvoranaController@store' )}}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="POST">


    <div>
      {{-- Form::label('brojmjesta','brojmjesta') --}}
      <input type="text" placeholder="Upisite broj mjesta" name='brojmjesta' class='form-control'>
    </div>
    <div>
      {{-- Form::label('naziv','Naziv') --}}
      <input type="text" maxlength="40" placeholder="Upisite naziv dvorane" name='naziv' class='form-control'>
    </div>
    <br>
    <div class="col-xs-6 col-sm-6 col-md-6">
      <input type="submit" class="btn btn-lg btn-success btn-block" value="Dodaj">
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop

