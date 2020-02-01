@extends('layout.admin')

@section("title", "Editar documento")

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
            Documento: <b> {{$documento->nome}} </b>

            <a href="{{route('documentos.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
        </div>
        
        <div class="card-body">

        <form method="POST" action="{{route('documentos.update',$documento)}}" class="form-group" enctype="multipart/form-data">
                @include('documentos.partials.add-edit')
                @csrf
                @method('put')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="{{route('documentos.index')}}" class="btn btn-default">Cancelar</a>

				</div>

			</form>

		</div>
	</div>
</div>


@endsection
