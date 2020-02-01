
@extends('layout.admin')

@section("title", "Anos")

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
            <div> <strong>Descrição:</strong> {{$tipo->descricao}} </div>


            @if ($tipo->tipo_id)
            <div> <strong>Documento pai:</strong> {{$tipo->tipo_id->nome}} </div>
            @endif
		</div>
	</div>
</div>
@endsection
