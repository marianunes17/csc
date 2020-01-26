
@extends('layout.admin')

@section("title", "Categorias")

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação Categoria
        </div>
        <div class="card-body">

			<div> <strong>Nome:</strong> {{$categoria->nome}} </div>
            <div> <strong>Descrição:</strong> {{$categoria->descricao}} </div>


            @if ($categoria->categoria_id)
            <div> <strong>Categoria pai:</strong> {{$categoria->categoriaParent->nome}} </div>
            @endif
		</div>
	</div>
</div>
@endsection
