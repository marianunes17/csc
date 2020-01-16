@extends('layout.admin')

@section("title", "Enviar resposta")

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
       <div class="card-header py-3">
           Enviar Resposta
       </div>
       <div class="card-body">

       <form method="POST" action="{{route('parcerias.update',$parceria)}}" class="form-group" enctype="multipart/form-data">
               @include('parcerias.partials.add-edit')
               @csrf
               @method('put')
               <div class="form-group">
                   <button type="submit" class="btn btn-success" name="ok">Guardar</button>

                   <a href="{{route('parcerias.index')}}" class="btn btn-default">Cancelar</a>

               </div>

           </form>

       </div>
   </div>
</div>

@endsection
