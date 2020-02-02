
@extends('layout.admin')

@section("title", "Documentos")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        Documento: <b> {{$documento->nome}} </b>

        <a href="{{route('documentos.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </a>
    </div>

        <div class="card-body">

			<div>
				<a href="{{Storage::disk('public')->url('documento_files/').$documento->file}}"
                    class="img-documentos" target="_blank" alt="img documentos">Ver ficheiro</a>
			</div>
<br>
			<div><strong>Título:</strong> {{$documento->nome}} </div>
            <div><strong>Descrição:</strong> {{$documento->descricao}} </div>
            <div><strong>Categoria:</strong> {{$documento->tipo->nome}} </div>
		</div>
	</div>
</div>
@endsection
