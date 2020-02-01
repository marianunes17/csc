@extends('layout.admin')

@section("title", "Parcerias")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <h5 class="card-header py-3">
            Parceria: <b> {{$parceria->titulo}} </b>

            <a href="{{route('parcerias.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
        </h5>
        <div class="card-body">

            <div>
                <img alt="parcerias image" src="{{Storage::disk('public')->url('parceria_images/').$parceria->imagem}}" class="w-25">
            </div>

            <div><strong>Título:</strong> {{$parceria->titulo}} </div>
            <div><strong>Descrição:</strong> {{$parceria->descricao}} </div>
            <div><strong>Imagem:</strong> {{$parceria->imagem}} </div>
        </div>
    </div>
</div>

@endsection
