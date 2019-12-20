
@extends('layout.admin')

@section("title", "Sub Categorias")

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Sub Categoria
        </div>
        <div class="card-body">

			<div> <strong>Nome:</strong> {{$subcategory->name}} </div>
            <div> <strong>Descrição:</strong> {{$subcategory->description}} </div>
		</div>
	</div>
</div>
@endsection
