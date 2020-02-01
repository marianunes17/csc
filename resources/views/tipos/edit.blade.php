@extends('layout.admin')

@section("title", "Editar Ano")

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
            Editar: <b> {{$tipo->nome}} </b>

            <a href="{{route('tipos.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
        </div>
        <div class="card-body">

			<form method="POST" action="{{route('tipos.update',$tipo)}}" class="form-group inline">
                @include('tipos.partials.add-edit')
                @csrf
                @method("PUT")
                <!--O formulário apenas suporta o post e o get, por isso tem de ser acrescentar @ method("PUT")
                Rotas put -->
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Guardar</button>

                    <a href="{{route('tipos.index')}}" class="btn btn-default">Cancelar</a>
                    <!--Quando cancela vai para o index-->
                </div>
            </form>

		</div>
	</div>
</div>


@endsection


