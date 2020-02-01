@extends('layout.admin')

@section("title", "Editar categoria")

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
            Editar Categoria: <b> {{$categoria->nome}} </b>

            <a href="{{route('categorias.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
        </div>

        <div class="card-body">

			<form method="POST" action="{{route('categorias.update',$categoria)}}" class="form-group inline">
                @include('categorias.partials.add-edit')
                @csrf
                @method("PUT")
                <!--O formulário apenas suporta o post e o get, por isso tem de ser acrescentar @ method("PUT")
                Rotas put -->
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Guardar</button>

                    <a href="{{route('categorias.index')}}" class="btn btn-default">Cancelar</a>
                    <!--Quando cancela vai para o index-->
                </div>
            </form>

		</div>
	</div>
</div>


@endsection


