
@extends('layout.admin')

@section("title", "Equipa")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
       <div class="card-header py-3">
           Equipa
       </div>
       <div class="card-body">

           <div>
               <img alt="Post image" src="xxx">
           </div>

           <div><strong>Nome:</strong> {{$equipa->titulo}} </div>
           <div><strong>Cargo:</strong> {{$equipa->titulo}} </div>
           <div><strong>Descrição:</strong> {{$equipa->descricao}} </div>
           <div><strong>Imagem:</strong> {{$equipa->imagem}} </div>
       </div>
   </div>
</div>

@endsection
