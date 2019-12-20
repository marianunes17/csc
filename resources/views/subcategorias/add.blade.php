@extends('layout.admin')

@section("title", "Adicionar Sub Categoria")

@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Adicionar Sub Categoria
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('subcategorias.store')}}" class="form-group" >
                @csrf
                @include('subcategorias.partials.add-edit')
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Salvar</button>
                    <a href="{{route('subcategorias.index')}}" class="btn btn-default">Cancelar</a>
                </div>
            </form>
		</div>
	</div>
</div>
@endsection
