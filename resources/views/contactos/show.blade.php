
@extends('layout.admin')

@section("title", "Contactos")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            Contacto: <b> {{$contacto->nome}} </b>

            <a href="{{route('contactos.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
        </div>

       <div class="card-body">
           <div><strong>Nome:</strong> {{$contacto->nome}} </div>
           <div><strong>Email:</strong> {{$contacto->email}} </div>
           <div><strong>Assunto:</strong> {{$contacto->assunto}} </div>
           <div><strong>Mensagem:</strong> {{$contacto->mensagem}} </div>
           <div><strong>Data:</strong> {{$contacto->data}} </div>
       </div>
   </div>
</div>

@endsection
