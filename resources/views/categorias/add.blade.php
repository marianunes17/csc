@extends('layout.admin')

@section("title", "Adicionar Categoria")

@section('content')

<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			Add Category
		</div>
		<div class="card-body">

			<form method="POST" action="{{route('categorias.store')}}" class="form-group" >
                @csrf
                @include('categorias.partials.add-edit')
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Save</button>
                    <a href="{{route('categorias.index')}}" class="btn btn-default">Cancel</a>
                </div>
            </form>
		</div>
	</div>
</div>
@endsection
