@extends('layout.admin')

@section("title", "Adicionar Contactos")

@section('content')

<div class="container-fluid">

    <div class="card shadow mb-4">
        <h5 class="card-header py-3">
            Adicionar Contactos
        </h5>
        
        <div class="card-body">

            <form method="POST" action="{{route('contactos.store')}}"
                class="form-group"
                enctype="multipart/form-data">
                @csrf
                @include('contactos.partials.add-edit')

                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">Guardar</button>
                    <a href="{{route('contactos.index')}}" class="btn btn-default">Cancelar</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
