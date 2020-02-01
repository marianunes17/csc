@extends('layout.admin')

@section("title", "Editar Testemunho")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
       <div class="card-header py-3">
           Editar testemunho de: <b> {{$testemunho->nome}} </b>

           <a href="{{route('testemunhos.index')}}" class="btn btn-outline-primary float-right"> <i class="fas fa-arrow-left"></i> Voltar</a>
            </a>
       </div>
       <div class="card-body">

       <form method="POST" action="{{route('testemunhos.update',$testemunho)}}" class="form-group" enctype="multipart/form-data">
               @include('testemunhos.partials.add-edit')
               @csrf
               @method('put')
               <div class="form-group">
                   <button type="submit" class="btn btn-success" name="ok">Guardar</button>

                   <a href="{{route('testemunhos.index')}}" class="btn btn-success">Cancelar</a>

               </div>

           </form>

       </div>
   </div>
</div>

@endsection
