@extends("layout.master")

@section("title", "Documentos")

@section("content")

@include ('layout.partials.banner')


<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="panel panel-default sidebar-menu with-icons">
                <div class="panel-heading">
                    <h3 class="h4 panel-title">Tipos</h3>
                </div>

                <div class="panel-body">

                    <ul class="nav nav-pills flex-column text-sm">
                        @foreach($tipos as $i => $tipo)
                        @if ( (request()->query('tipo_id')==$tipo->id) || (request()->query('pai')==$tipo->id)
                        || ($i==0 && request()->query('tipo_id')==""))
                        <li class="nav-item"><a href="{{route('csc.documentos')}}?tipo_id={{$tipo->id}}"
                                class="nav-link active tipos">{{$tipo->name}}</a></li>
                        @if(count($tipos_sub))
                        <ul>
                            @foreach($tipos_sub as $tipo)
                            <li>
                                <a href="{{route('csc.documentos')}}?tipo_id={{$tipo->id}}&pai={{$tipo->id}}"
                                    class="nav-link Tipos">
                                    {{$tipo->name}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                        @else
                        <li class="nav-item"><a href="{{route('csc.documentos')}}?tipo_id={{$tipo->id}}" class="nav-link
                            @if (request()->query('pai')==$tipo->id) active @endif
                            tipos">{{$tipo->name}}</a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            @foreach($documentos as $documento)
            <div class="card">

                <div class="card-header text-center">
                    {{$documento->nome}}
                </div>

                <div class="card-body">
                    <p class="card-text">
                        <div class="row">
                            <div class="col-lg-3">
                                @if ($documento->imagem)
                                <object data="meuarquivo.pdf" type="application/pdf">
                                    <p>Seu navegador não tem um plugin pra PDF</p>
                                </object>
                                @endif
                            </div>

                            <div class="col-lg-9">
                                {{$documento->descricao}}
                            </div>
                        </div>
                    </p>

                    <p class="card-text"> Venha ter connosco! </p>

                </div>
                <div class="card-footer card-footer-event text-muted d-inline-block">
                    <span class="float-left"> {{$documento->data}} </span>
                    <span class="float-right">{{$documento->tipo->name}}</span>
                </div>

            </div>
            @endforeach
        </div>

    </div>

</div>

@endsection
