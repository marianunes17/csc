@extends ("layout.admin")

@section("title", "Eventos")

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 pl-4">Eventos</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{route('eventos.create')}}">
                <i class="fas fa-plus"></i> Adicionar Eventos
            </a>

            <a href="{{route('csc.eventos')}}" class="btn btn-outline-primary float-right" target="_blank">
                Pré-Visualizar
                <i class="fas fa-eye"></i>
            </a>
        </div>
        <div class="card-body">
            @if (count($eventos))
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Imagem</th>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Data</th>

                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($eventos as $evento)
                        <tr>
                            <td>
                                @if ($evento->imagem)
                                <img src="{{Storage::disk('public')->url('eventos_images/').$evento->imagem}}"
                                    class="img-eventos" alt="eventos image">
                                @else
                                <img src="{{asset('img/no-image.png')}}" class="img-eventos" alt="eventos image">
                                @endif
                            </td>

                            <td>{{$evento->nome}}</td>
                            <td>{{$evento->descricao}}</td>
                            <td>{{$evento->categoria->name}}</td>
                            <td>{{$evento->data}}</td>


                            </td>
                            <td nowrap>
                                <a href="{{route('eventos.show',$evento)}}"
                                    class="btn btn-sm btn-link text-decoration-none d-inline">
                                    <i class="fas fa-eye fa-xs text-primary" style="font-size: 15px;"></i>
                                </a>

                                <a href="{{route('eventos.edit',$evento)}}"
                                    class="btn btn-sm btn-link d-inline text-decoration-none">
                                    <i class="fas fa-pen fa-xs text-warning" style="font-size: 15px;"></i>
                                </a>

                                <form method="POST" action="{{route('eventos.destroy',$evento)}}" role="form"
                                    class="d-inline" onsubmit="return confirm('Tem a certeza que pretende apagar o evento ?');">
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
            <h6>Não existem eventos registados</h6>
            @endif
        </div>
        …
    </div>
</div>
@endsection
