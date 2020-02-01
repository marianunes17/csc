
@extends('layout.admin')

@section("title", "Categorias")

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
            Categoria: <b> {{$categoria->nome}} </b>

            <a href="{{route('categorias.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
        </div>

        <div class="card-body">

			<div> <strong>Nome:</strong> {{$categoria->nome}} </div>
            <div> <strong>Descrição:</strong> {{$categoria->descricao}} </div>


            @if ($categoria->categoria_id)
            <div> <strong>Categoria pai:</strong> {{$categoria->categoria_id->nome}} </div>
            @endif
		</div>
	</div>
</div>
@endsection
