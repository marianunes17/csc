@extends('layout.admin')

@section("title", "Editar evento")

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
            Editar Evento: <b> {{$evento->nome}} </b>

            <a href="{{route('eventos.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </a>
        </div>
        <div class="card-body">

        <form method="POST" action="{{route('eventos.update',$evento)}}" class="form-group" enctype="multipart/form-data">
                @include('eventos.partials.add-edit')
                @csrf
                @method('put')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="{{route('eventos.index')}}" class="btn btn-default">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>


@endsection
