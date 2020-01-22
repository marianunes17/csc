
@extends('layout.admin')

@section("title", "Utilizadores")

@section('content')
<div class="container-fluid">

  <div class="card shadow mb-4">
   <div class="card-header py-3">
           Utilizadores
       </div>
    <div class="card-body">
      <div><strong>Nome:</strong> {{$user->name}} </div>
      <div><strong>Email:</strong> {{$user->email}} </div>

    </div>
  </div>
</div>

@endsection
