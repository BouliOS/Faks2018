{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dvorane Admin panel')

@section('content_header')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin">Fakultet</a></li>
    <li class="breadcrumb-item"><a href="/dvorana">Dvorane</a></li>
    <li class="breadcrumb-item active" aria-current="#">Sve dvorane</li>
  </ol>
</nav>
    <h1>Dvorane {{ App\Dvorana::all()->count()}}</h1>
@stop

@section('content')


<div class="alert-success">
@if(Session::has('success'))
    <div class="alert-box success">
        <h2>{{ Session::get('success') }}</h2>
    </div>
@endif
</div>
  <a href="/dvorana/create" class="btn btn-primary" style=float:right;">Dodaj dvoranu</a>
    @foreach ($dvo as $d)
    <li><a href="/dvorana/{{ $d->id }}">{{ $d->naziv }}</a></li>
    @endforeach

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

