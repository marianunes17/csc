@extends('layout.admin')

@section("title", "Adicionar documento")

@section('content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            Adicionar Documento
        </div>
        <div class="card-body">

            <form method="POST" action="{{route('documentos.store')}}"
                class="form-group"
                enctype="multipart/form-data">
                @csrf
                @include('documentos.partials.add-edit')

                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                    <a href="{{route('documentos.index')}}" class="btn btn-default">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
