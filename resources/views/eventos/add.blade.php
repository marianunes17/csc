@extends('layout.admin')

@section("title", "Adicionar evento")

@section('content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            Adicionar Evento
        </div>
        <div class="card-body">

            <form method="POST" action="{{route('eventos.store')}}"
                class="form-group"
                enctype="multipart/form-data">
                @csrf
                @include('eventos.partials.add-edit')

                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Salvar</button>
                    <a href="{{route('eventos.index')}}" class="btn btn-default">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
