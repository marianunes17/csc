
@extends('layout.admin')

@section("title", "Tipos")

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação Tipo
        </div>
        <div class="card-body">

			<div> <strong>Nome:</strong> {{$tipo->name}} </div>
            <div> <strong>Descrição:</strong> {{$tipo->description}} </div>


            @if ($tipo->tipo_id)
            <div> <strong>Tipo pai:</strong> {{$tipo->tipoParent->name}} </div>
            @endif
		</div>
	</div>
</div>
@endsection
