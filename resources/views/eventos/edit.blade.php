@extends('layout.admin')

@section("title", "Editar evento")

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar Eventos
        </div>
        <div class="card-body">

			<form method="POST" action="#" class="form-group" enctype="multipart/form-data">
				@include('eventos.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Save</button>

					<a href="#" class="btn btn-default">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>


@endsection
