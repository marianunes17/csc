@extends('layout.admin')

@section('content')

<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar eventos
        </div>
        <div class="card-body">

			<form method="POST" action="#" class="form-group inline">
                @include('eventos.partials.add-edit')
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Salvar</button>

                    <a href="{{route('eventos.index')}}" class="btn btn-default">Cancelar</a>
                    <!--Quando cancela vai para o index-->
                </div>
            </form>

		</div>
	</div>
</div>


@endsection


