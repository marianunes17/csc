
@extends('layout.admin')

@section("title", "Testemunhos")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
       <div class="card-header py-3">
           Testemunhos
       </div>
       <div class="card-body">

           <div><strong>Nome:</strong> {{$testemunho->nome}} </div>
           <div><strong>Sobrenome:</strong> {{$testemunho->sobrenome}} </div>
           <div><strong>Email:</strong> {{$testemunho->email}} </div>
           <div><strong>Testemunho:</strong> {{$testemunho->testemunho}} </div>
           <div><strong>Data:</strong> {{$testemunho->data}} </div>
           <br>
           <a href="{{route('testemunhos.index')}}" class="btn btn-success">Cancelar</a>
       </div>
   </div>
</div>

@endsection
