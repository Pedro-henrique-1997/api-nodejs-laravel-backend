@extends('templates.template')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Deletar</title>
</head>
<body>
	<form action="{{ route('excluir_usuario', ['id' => $usu_del->id])}}" method="post">
		@csrf
		<label for="Tem certeza deseja excluir este usuario?"></label>
		<input type="text" name="nome" value="{{$usu_del->name}}">
		<button>Sim</button>
	</form>

</body>
</html>

@endsection