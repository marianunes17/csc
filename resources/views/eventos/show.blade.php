
@extends('layout.admin')

@section("title", "Eventos")

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Evento
        </div>
        <div class="card-body">

			<div>
				<img alt="Post image" src="{{Storage::disk('public')->url('eventos_images/').$evento->imagem}}">
			</div>

			<div><strong>Título:</strong> {{$evento->nome}} </div>
            <div><strong>Descrição:</strong> {{$evento->descricao}} </div>
            <div><strong>Categoria:</strong> {{$evento->categoria->nome}} </div>
            <div><strong>Data:</strong> {{$evento->data}} </div>
		</div>
	</div>
</div>
@endsection
