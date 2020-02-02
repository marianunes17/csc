
@extends('layout.admin')

@section("title", "Categoria de documentos")

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
            <b> {{$tipo->nome}} </b>

            <a href="{{route('tipos.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
        </div>
        <div class="card-body">

			<div> <strong>Nome:</strong> {{$tipo->nome}} </div>

            @if ($tipo->tipo_id)
            <div> <strong>Associado pai:</strong> {{$tipo->nome}}</div>
            @endif
		</div>
	</div>
</div>
@endsection
