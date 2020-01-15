
@extends('layout.admin')

@section("title", "Contactos")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
       <div class="card-header py-3">
           <h4>Contacto</h4>
       </div>
       <div class="card-body">
           <div><strong>Nome:</strong> {{$contacto->nome}} </div>
           <div><strong>Email:</strong> {{$contacto->email}} </div>
           <div><strong>Assunto:</strong> {{$contacto->assunto}} </div>
           <div><strong>Mensagem:</strong> {{$contacto->mensagem}} </div>
           <div><strong>Data:</strong> {{$contacto->data}} </div>
             <a href="{{route('contactos.index')}}" class="btn btn-info mt-3">Voltar</a>
       </div>
   </div>
</div>

@endsection
