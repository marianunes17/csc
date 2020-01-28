@extends('layout.admin')

@section("title", "Editar Membro Equipa")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
       <h5 class="card-header py-3">
           Editar Membro Equipa
       </h5>
       <div class="card-body">

       <form method="POST" action="{{route('equipas.update',$equipa)}}" class="form-group" enctype="multipart/form-data">
               @include('equipas.partials.add-edit')
               @csrf
               @method('put')
               <div class="form-group">
                   <button type="submit" class="btn btn-success" name="ok">Guardar</button>

                   <a href="{{route('equipas.index')}}" class="btn btn-default">Cancelar</a>

               </div>

           </form>

       </div>
   </div>
</div>

@endsection
