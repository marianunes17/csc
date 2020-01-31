@extends ("layout.admin")

@section("title", "Documentos")

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 pl-4">Documentos</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{route('documentos.create')}}">
                <i class="fas fa-plus"></i> Adicionar Documentos
            </a>

            <a href="{{route('csc.documentos')}}" class="btn btn-outline-primary float-right" target="_blank">
                Visualizar
                <i class="fas fa-eye"></i>
            </a>
        </div>
        <div class="card-body">
            @if (count($documentos))
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Data</th>

                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($documentos as $documento)
                        <tr>
                            <td>
                                @if ($documento->file)
                                <a href="{{Storage::disk('public')->url('documento_files/').$documento->file}}"
                                    class="img-documentos" target="_blank">Ver ficheiro</a>
                                @else
                                <img src="{{asset('img/no-image.png')}}" class="img-documentos" alt="documentos image"> </img>
                                @endif
                            </td>

                            <td>{{$documento->nome}}</td>
                            <td>{{$documento->descricao}}</td>
                            <td>{{$documento->tipo->nome}}</td>
                            <td>{{$documento->data}}</td>
                            <td nowrap>
                                <a href="{{route('documentos.show',$documento)}}"
                                    class="btn btn-sm btn-link text-decoration-none d-inline">
                                    <i class="fas fa-eye fa-xs text-primary" style="font-size: 15px;"></i>
                                </a>

                                <a href="{{route('documentos.edit',$documento)}}"
                                    class="btn btn-sm btn-link d-inline text-decoration-none">
                                    <i class="fas fa-pen fa-xs text-warning" style="font-size: 15px;"></i>
                                </a>

                                <form method="POST" action="{{route('documentos.destroy',$documento)}}" role="form"
                                    class="d-inline" onsubmit="return confirm('Tem a certeza que pretende apagar o documento ?');">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-sm btn-link text-decoration-none d-inline">
                                        <i class="fas fa-trash fa-xs text-danger" style="font-size: 15px;"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <h6>Não existem documento registados</h6>
            @endif
        </div>
    </div>
</div>
@endsection
