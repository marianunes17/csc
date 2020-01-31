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
                        @foreach($categorias as $i => $categoria)
                        @if ( (request()->query('cat_id')==$categoria->id) ||
                        (request()->query('cat_pai')==$categoria->id)
                        || ($i==0 && request()->query('cat_id')==""))
                        <li class="nav-item"><a href="{{route('csc.eventos')}}?cat_id={{$categoria->id}}"
                                class="nav-link active categorias">{{$categoria->nome}}</a></li>
                        @if(count($categorias_sub))
                        <ul>
                            @foreach($categorias_sub as $cat)
                            <li>
                                <a href="{{route('csc.eventos')}}?cat_id={{$cat->id}}&cat_pai={{$categoria->id}}"
                                    class="nav-link categorias">
                                    {{$cat->nome}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                        @else
                        <li class="nav-item"><a href="{{route('csc.eventos')}}?cat_id={{$categoria->id}}" class="nav-link
                            @if (request()->query('cat_pai')==$categoria->id) active @endif
                            categorias">{{$categoria->nome}}</a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            @foreach($eventos as $evento)
            <div class="card">

                <h4 class="card-header text-center text-uppercase py-4">
                    {{$evento->nome}}
                </h4>

                <div class="card-body">
                    <p class="card-text">
                        <div class="row">
                            <div class="col-lg-6">
                                @if ($evento->imagem)
                                <img src="{{Storage::disk('public')->url('eventos_images/').$evento->imagem}}"
                                    alt="flyer de natal" class="img-fluid z-depth-1">
                                @endif
                            </div>

                            <div class="col-lg-6">
                                {{$evento->descricao}}
                            </div>
                        </div>
                    </p>
                </div>
                <div class="card-footer card-footer-event text-muted d-inline-block">
                    <span class="float-left"> {{$evento->data}} </span>
                    <span class="float-right">{{$evento->categoria->nome}}</span>
                </div>

            </div>
            @endforeach
        </div>

    </div>

</div>

@endsection
