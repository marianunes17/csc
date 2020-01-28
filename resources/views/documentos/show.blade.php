
@extends('layout.admin')

@section("title", "Documentos")

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Documento
        </div>
        <div class="card-body">

			<div>
				<iframe alt="documento ifram" src="{{Storage::disk('public')->url('documentos_images/').$documento->imagem}}"> </iframe>
			</div>

			<div><strong>Título:</strong> {{$documento->nome}} </div>
            <div><strong>Descrição:</strong> {{$documento->descricao}} </div>
            <div><strong>Categoria:</strong> {{$documento->tipo->nome}} </div>
		</div>
	</div>
</div>
@endsection
