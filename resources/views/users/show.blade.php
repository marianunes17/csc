
@extends('layout.admin')

@section("title", "Utilizadores")

@section('content')
<div class="container-fluid">

  <div class="card shadow mb-4">
   <div class="card-header py-3">
           Utilizador: <b> {{$user->name}}  </b>

            <a href="{{route('users.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
       </div>
    <div class="card-body">
      <div><strong>Nome:</strong> {{$user->name}} </div>
      <div><strong>Email:</strong> {{$user->email}} </div>

    </div>
  </div>
</div>

@endsection
