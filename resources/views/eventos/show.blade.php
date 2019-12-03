
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informações dos eventos
        </div>
        <div class="card-body">

			<div> <strong>Título:</strong> {{$eventos->Titulo}} </div>
            <div> <strong>Descrção:</strong> {{$eventos->descricao}} </div>
		</div>
	</div>
</div>
@endsection
