@extends('layout.admin')

@section("title", "Adicionar Testemunho")

@section('content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <h5 class="card-header py-3">
            Adicionar testemunho

            <a href="{{route('testemunhos.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
        </h5>

        <div class="card-body">

            <form method="POST" action="{{route('testemunho.store')}}"
                class="form-group"
                enctype="multipart/form-data">
                @csrf
                @include('testemunho.partials.add-edit')

                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                    <a href="{{route('testemunho.index')}}" class="btn btn-default">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
