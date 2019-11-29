
@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informações dos eventos
        </div>
        <div class="card-body">

			<div> <strong>Nome:</strong> {{$eventos->name}} </div>
            <div> <strong>Descrção:</strong> {{$eventos->description}} </div>
		</div>
	</div>
</div>
@endsection
