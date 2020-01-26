@extends("layout.master")

@section("title", "Eventos")

@section("content")

@include ('layout.partials.banner')


<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="panel panel-default sidebar-menu with-icons">
                <div class="panel-heading">
                    <h3 class="h4 panel-title">Categorias</h3>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills flex-column text-sm">
                        @foreach($categories as $i => $categoria)
                        @if ( (request()->query('cat_id')==$categoria->id) || (request()->query('pai')==$categoria->id)
                        || ($i==0 && request()->query('cat_id')==""))
                            <li class="nav-item"><a href="{{route('csc.eventos')}}?cat_id={{$categoria->id}}"
                                class="nav-link active categorias">{{$categoria->name}}</a></li>
                            @if(count($categories_sub))
                            <ul>
                                @foreach($categories_sub as $cat)
                                <li>
                                    <a href="{{route('csc.eventos')}}?cat_id={{$cat->id}}&pai={{$categoria->id}}" class="nav-link categorias">
                                    {{$cat->name}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        @else
                        <li class="nav-item"><a href="{{route('csc.eventos')}}?cat_id={{$categoria->id}}" class="nav-link
                            @if (request()->query('pai')==$categoria->id) active @endif
                            categorias">{{$categoria->name}}</a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
@foreach($eventos as $evento)
            <div class="card">

                <div class="card-header text-center">
                    {{$evento->nome}}
                </div>

                <div class="card-body">
                    <p class="card-text">
                        <div class="row">
                            <div class="col-lg-3">
                                @if ($evento->imagem)
                                    <img src="{{Storage::disk('public')->url('eventos_images/').$evento->imagem}}" alt="flyer de natal"
                                        class="img-fluid z-depth-1">
                                @endif
                            </div>

                            <div class="col-lg-9">
                                {{$evento->descricao}}
                            </div>
                        </div>
                    </p>

                    <p class="card-text"> Venha ter connosco! </p>

                </div>
                <div class="card-footer card-footer-event text-muted d-inline-block">
                <span class="float-left"> {{$evento->data}} </span>
                    <span class="float-right">{{$evento->category->name}}</span>
                </div>

            </div>
  @endforeach
        </div>

    </div>

</div>

@endsection
