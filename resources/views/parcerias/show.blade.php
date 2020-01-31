@extends('layout.admin')

@section("title", "Parcerias")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <h5 class="card-header py-3">
            Parcerias
        </h5>
        <div class="card-body">

            <div>
                <img alt="parcerias image" src="{{Storage::disk('public')->url('parceria_images/').$parceria->imagem}}">
            </div>

            <div><strong>Título:</strong> {{$parceria->titulo}} </div>
            <div><strong>Descrição:</strong> {{$parceria->descricao}} </div>
            <div><strong>Imagem:</strong> {{$parceria->imagem}} </div>
        </div>
    </div>
</div>

@endsection
