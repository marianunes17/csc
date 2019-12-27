
@extends('layout.admin')

@section("title", "Categorias")

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Informação Categoria
        </div>
        <div class="card-body">

			<div> <strong>Nome:</strong> {{$category->name}} </div>
            <div> <strong>Descrição:</strong> {{$category->description}} </div>

            
            @if ($category->category_id)
            <div> <strong>Categoria pai:</strong> {{$category->categoryParent->name}} </div>
            @endif
		</div>
	</div>
</div>
@endsection
