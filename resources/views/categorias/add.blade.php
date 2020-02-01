@extends('layout.admin')

@section("title", "Adicionar Categoria")

@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
            Adicionar Categoria

            <a href="{{route('categorias.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('categorias.store')}}" class="form-group" >
                @csrf
                @include('categorias.partials.add-edit')
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                    <a href="{{route('categorias.index')}}" class="btn btn-default">Cancelar</a>
                </div>
            </form>
		</div>
	</div>
</div>
@endsection
