@extends('layout.admin')

@section("title", "Editar Utilizadores")

@section('content')
<div class="container-fluid">

  <div class="card shadow mb-4">
   <div class="card-header py-3">
           Editar Utilizador: <b> {{$user->name}}  </b>

           <a href="{{route('users.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
       </div>
    <div class="card-body">

      <form method="POST" action="{{route('users.update',$user)}}" class="form-group"
        enctype="multipart/form-data">
        @csrf
        @method("PUT")
        @include('users.partials.add-edit')
        <div class="form-group">
          <button type="submit" class="btn btn-success" name="ok">Guardar</button>

          <a href="{{route('users.index')}}" class="btn btn-default">Cancelar</a>
        </div>

      </form>

      <a href="{{route('users.sendActivationEmail',$user)}}" class="btn btn-primary">Enviar email de ativação</a>
    </div>
  </div>
</div>

@endsection
