
@extends('layout.admin')

@section("title", "Equipa Direção")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
       <h5 class="card-header py-3">
           Equipa Direção
       </h5>
       <div class="card-body">

           <div>
               <img alt="Post image" src="{{Storage::disk('public')->url('equipa_direcao_images/').$equipa->imagem}}">
           </div>

           <div><strong>Nome:</strong> {{$equipa->titulo}} </div>
           <div><strong>Cargo:</strong> {{$equipa->titulo}} </div>
           <div><strong>Imagem:</strong> {{$equipa->imagem}} </div>
       </div>
   </div>
</div>

@endsection
