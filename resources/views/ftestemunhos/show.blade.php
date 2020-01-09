
@extends('layout.admin')

@section("title", "Parcerias")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
       <div class="card-header py-3">
           Parcerias
       </div>
       <div class="card-body">

           <div>
               <img alt="Post image" src="xxx">
           </div>

           <div><strong>Título:</strong> {{$parceria->titulo}} </div>
           <div><strong>Descrição:</strong> {{$parceria->descricao}} </div>
           <div><strong>Imagem:</strong> {{$parceria->imagem}} </div>
       </div>
   </div>
</div>

@endsection