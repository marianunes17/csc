@extends('layout.admin')

@section("title", "Adicionar Membro Equipa da Direção")

@section('content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <h5 class="card-header py-3">
            Adicionar Membro Equipa da Direção

            <a href="{{route('equipasdirecao.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
        </h5>

        <div class="card-body">

            <form method="POST" action="{{route('equipasdirecao.store')}}"
                class="form-group"
                enctype="multipart/form-data">
                @csrf
                @include('equipasdirecao.partials.add-edit')

                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                    <a href="{{route('equipasdirecao.index')}}" class="btn btn-default">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
