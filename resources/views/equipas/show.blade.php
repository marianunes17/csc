
@extends('layout.admin')

@section("title", "Equipa")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
       <h5 class="card-header py-3">
           <b> {{$equipa->titulo}} </b>

           <a href="{{route('equipas.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
       </h5>
       <div class="card-body">

           <div>
               <img alt="equipa image" src="{{Storage::disk('public')->url('equipa_images/').$equipa->imagem}}">
           </div>

           <div><strong>Nome:</strong> {{$equipa->titulo}} </div>
           <div><strong>Cargo:</strong> {{$equipa->titulo}} </div>
           <div><strong>Descrição:</strong> {{$equipa->descricao}} </div>
           <div><strong>Imagem:</strong> {{$equipa->imagem}} </div>
       </div>
   </div>
</div>

@endsection
