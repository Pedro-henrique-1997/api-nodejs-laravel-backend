@extends('templates.template')

@section('content')
<h1 class="text-center">Crud</h1>

<div style="text-align: center">
	<a href="{{route('cadastrar_usuario')}}">
		<button type="button" class="btn btn-success">Cadastrar</button>

	</a>
</div>

<div class="col-8 m-auto">
	@csrf

	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">Email</th>
				<th scope="col">Tipo</th>				
				<th scope="col">Ações</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				@foreach($usu as $row)

			</tr>
			<tr>
				<th scope="row">{{$row->name}}</th>
				<td>{{$row->email}}</td>
                <td>{{$row->tipo}}</td>				
				<td>
					<a href="{{route('ver_usuario', ['id' => $row->id])  }}">
						<button type="button" class="btn btn-secondary">Visualizar</button>
					</a>

					<a href="{{route('editar_usuario', ['id' => $row->id])  }}">
						<button type="button" class="btn btn-warning">Editar</button>
					</a>

					<a  href="{{route('excluir_usuario', ['id' => $row->id])  }}">
                        <button  class="btn btn-danger">Deletar</button>
                    </a>
				</td>
			</tr>
          @endforeach
		</tbody>
	</table>
{{$usu->links()}}	
</div>
@endsection