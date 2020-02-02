@extends('layout.admin')

@section("title", "Editar Membro Equipa da Direção")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
       <h5 class="card-header py-3">
           Editar Membro da Direção: <b> {{$equipa->titulo}} </b>

           <a href="{{route('equipasdirecao.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </a>


       </h5>
       <div class="card-body">

       <form method="POST" action="{{route('equipasdirecao.update',$equipa)}}" class="form-group" enctype="multipart/form-data">
               @include('equipasdirecao.partials.add-edit')
               @csrf
               @method('put')
               <div class="form-group">
                   <button type="submit" class="btn btn-success" name="ok">Guardar</button>

                   <a href="{{route('equipasdirecao.index')}}" class="btn btn-default">Cancelar</a>

               </div>

           </form>

       </div>
   </div>
</div>

@endsection
