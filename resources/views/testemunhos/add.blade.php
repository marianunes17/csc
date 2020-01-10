@extends('layout.admin')

@section("title", "Adicionar Parcerias")

@section('content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <h5 class="card-header py-3">
            Adicionar Parceria
        </h5>
        
        <div class="card-body">

            <form method="POST" action="{{route('parcerias.store')}}"
                class="form-group"
                enctype="multipart/form-data">
                @csrf
                @include('parcerias.partials.add-edit')

                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                    <a href="{{route('parcerias.index')}}" class="btn btn-default">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
