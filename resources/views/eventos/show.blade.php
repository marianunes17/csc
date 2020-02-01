
@extends('layout.admin')

@section("title", "Eventos")

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
            Evento: <b> {{$evento->nome}} </b>

            <a href="{{route('eventos.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
        </div>
        <div class="card-body">

			<div>
                @if ($evento->imagem)
                    <img alt="eventos image" src="{{Storage::disk('public')->url('eventos_images/').$evento->imagem}}"
                    class="w-25 h-auto d-block">
                @else
                    <img src="{{asset('img/no-image.png')}}" class="w-25 h-auto d-block img-eventos" alt="eventos image"> </img>
                 @endif
			</div>
<br>
			<div><strong>Título:</strong> {{$evento->nome}} </div>
            <div><strong>Descrição:</strong> {{$evento->descricao}} </div>
            <div><strong>Categoria:</strong> {{$evento->categoria->nome}} </div>
            <div><strong>Data:</strong> {{$evento->data}} </div>
		</div>
	</div>
</div>
@endsection
