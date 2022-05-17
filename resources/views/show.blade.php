@extends('templates.template')

@section('content')

<h1 class="text-center">Visualizar</h1>

<div class="col-8 m-auto">

	

	Nome: {{$usu->name}}<br>
	Email: {{$usu->email}}<br>
	Tipo:{{$usu->tipo}}<br>
	
	
</div>

@endsection