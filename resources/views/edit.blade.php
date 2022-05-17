@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar</h1> <hr>

<div class="col-8 m-auto">
	<form name="formCad" id="formCad" method="post" action="{{route('validarEdit_usuario', ['id' => $usu_edit->id] )}}">
		@csrf

	<input class="form-control" type="text" name="name" id="name" placeholder="Nome:" autocomplete="off" value="{{$usu_edit->name}}"><br>
 

	<input class="form-control" type="email" name="email" id="email" placeholder="Email:" autocomplete="off" value="{{$usu_edit->email}}"><br>

	<input class="form-control" type="text" name="tipo" id="tipo" placeholder="Tipo:" autocomplete="off" value="{{$usu_edit->tipo}}"><br>
   	

	<input type="submit" name="cadastrar" class="btn btn-success">
		
	</form>
	
</div>
@endsection