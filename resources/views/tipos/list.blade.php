@extends ("layout.admin")

@section("title", "Anos")

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 pl-3">Anos</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{route('tipos.create')}}">
                <!-- rota para criar a tipo -->

                <i class="fas fa-plus"></i> Adicionar Anos
            </a>
        </div>
        <div class="card-body">
            @if (count($tipos))
            <!--Se tiver anos mostra-as-->

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Documento Pai</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tipos as $tipo)
                        <tr>
                            <td>{{$tipo->nome}}</td>
                            <td>
                                @if ($tipo->tipo_id)
                                {{$tipo->tipo_id}}
                                @endif
                            </td>

                            <td nowrap>
                                <a class="btn btn-sm btn-link text-decoration-none d-inline" href="{{route('tipos.show',$tipo)}}">
                                    <i class="fas fa-eye fa-xs text-primary" style="font-size: 15px;"></i>
                                </a>

                                <a class="btn btn-sm btn-link text-decoration-none d-inline" href="{{route('tipos.edit',$tipo)}}">
                                    <i class="fas fa-pen fa-xs text-warning" style="font-size: 15px;"></i>
                                </a>

                                <form method="POST" action="{{route('tipos.destroy',$tipo)}}" role="form"
                                    class="d-inline"
                                    onsubmit="return confirm('Tem a certeza que deseja excluir este ano?');">
                                    @csrf
                                    <!--Proteção do website contra ataques de cross-site request forgery (CSRF),
                        ou seja, Contra pedidos que provêm de outros websites
                    Acrescenta 2 campos escondidos ao formulario-->

                                    @method("DELETE")
                                    <button type="submit" class="btn btn-sm btn-link text-decoration-none d-inline">
                                        <i class="fas fa-trash fa-xs text-danger" style="font-size: 15px;"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <h6>Não há anos</h6>
            <!--Caso não tenha anos mostra esta mensagem-->
            @endif
        </div>
    </div>
</div>
@endsection
