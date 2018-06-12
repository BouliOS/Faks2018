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
<h1>Uredi dvoranu {{ $dvo->naziv}}</h1>
@stop

@section('content')
<div>
@if(Session::has('success'))
    <div class="alert-box success">
        <h2>{{ Session::get('success') }}</h2>
    </div>
@endif
</div>


<br>

<hr>
<div>
  <!-- TODO: pogledaj verziju 5.5 -->

  <form  action="{{action('DvoranaController@update', $dvo->id)}}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">

    <div>
      {{-- Form::label('id','Šifra dvorane') --}}
      <input readonly type="number" value="{{ $dvo->id}}" name='id' class='form-control'>
    </div>
    
    <div>
      {{-- Form::label('brojmjesta','brojmjesta') --}}
      <input type="text" value="{{ $dvo->brojmjesta}}" name='brojmjesta' class='form-control'>
    </div>
    <div>
      {{-- Form::label('naziv','Naziv') --}}
      <input type="text" maxlength="40" value="{{ $dvo->naziv}}" name='naziv' class='form-control'>
    </div>
    <br>
    <div class="col-xs-6 col-sm-6 col-md-6">
      <input type="submit" class="btn btn-lg btn-success btn-block" value="Edit">
    </div>

  </form>
  <form action="{{action('DvoranaController@destroy', $dvo->id)}}" method="post">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="DELETE">  
    <div class="col-xs-6 col-sm-6 col-md-6">
      <input type="submit" class="btn btn-lg btn-warning btn-block" value="Delete">
    </div>
  </form>
</div>



@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop

