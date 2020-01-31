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
                        @foreach($tipos as $i => $tipo1)
                        @if ( (request()->query('tip_id')==$tipo1->id) || (request()->query('tipo_pai')==$tipo1->id)
                        || ($i==0 && request()->query('tip_id')==""))
                        <li class="nav-item">
                            <a href="{{route('csc.documentos')}}?tip_id={{$tipo1->id}}"
                                class="nav-link active tipos">{{$tipo1->nome}}</a>
                        </li>
                        @if(count($tipos_sub))
                        <ul>
                            @foreach($tipos_sub as $tip)
                            <li>
                                <a href="{{route('csc.documentos')}}?tip_id={{$tip->id}}&tipo_pai={{$tipo1->id}}"
                                    class="nav-link tipos1">
                                    {{$tip->nome}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                        @else
                        <li class="nav-item"><a href="{{route('csc.documentos')}}?tip_id={{$tipo1->id}}" class="nav-link
                            @if (request()->query('tipo_pai')==$tipo1->id) active @endif
                            tipos1">{{$tipo1->nome}}</a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            @foreach($documentos as $documento)
            <div class="card">

                <h4 class="card-header text-center text-uppercase py-4">
                    {{$documento->nome}}
                </h4>

                <div class="card-body">
                    <p class="card-text">
                        <div class="row">
                            <div class="col-lg-6">
                                @if ($documento->file)
                                <object width="400" height="400"
                                    data="{{Storage::disk('public')->url('documento_files/').$documento->file}}"
                                    type="application/pdf">
                                    <p>Seu navegador não tem um plugin pra PDF</p>
                                </object>
                                @endif
                            </div>

                            <div class="col-lg-6">
                                {{$documento->descricao}}
                            </div>
                        </div>
                    </p>

                </div>
                <div class="card-footer card-footer-event text-muted d-inline-block">
                    <span class="float-left"> {{$documento->data}} </span>
                    <span class="float-right">{{$documento->tipo->nome}}</span>
                </div>

            </div>
            @endforeach
        </div>

    </div>

</div>

@endsection
