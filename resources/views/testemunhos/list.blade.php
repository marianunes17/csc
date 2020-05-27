@extends ("layout.admin")

@section("title", "Testemunhos")

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 pl-4">Testemunhos</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <a href="{{route('csc.index')}}" class="btn btn-outline-primary float-right" target="_blank">
                Visualizar
                <i class="fas fa-eye"></i>
            </a>
        </div>
        <div class="card-body">
            @if (count($testemunhos))
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Email</th>
                            <th>Testemunho</th>
                            <th>Data</th>
                            <th>Publicado</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testemunhos as $testemunho)
                        <tr>

                            <td>
                                {{$testemunho->nome}}
                            </td>

                            <td>{{$testemunho->sobrenome}}</td>
                            <td>{{$testemunho->email}}</td>
                            <td>{{$testemunho->testemunho}}</td>
                            <td>{{$testemunho->data}}</td>
                            <td>
                                <form method="post" action="{{route('testemunhos.publicar',$testemunho)}}">
                                    @csrf
                                    @method('patch')
                                    @if($testemunho -> publicado)
                                    <input type="checkbox" name="publicado" checked="" onclick="this.form.submit();">
                                    @else
                                    <input type="checkbox" name="publicado" onclick="this.form.submit();">
                                    @endif
                                </form>
                            </td>



                            <td nowrap>
                                <a href="{{route('testemunhos.show',$testemunho)}}"
                                    class="btn btn-sm btn-link text-decoration-none d-inline"
                                    title="Visualizar testemunho">
                                    <i class="fas fa-eye fa-xs text-primary" style="font-size: 15px;"></i>
                                </a>

                                <a href="{{route('testemunhos.edit',$testemunho)}}"
                                    class="btn btn-sm btn-link d-inline text-decoration-none" title="Editar testemunho">
                                    <i class="fas fa-pen fa-xs text-warning" style="font-size: 15px;"></i>
                                </a>

                                <form method="POST" action="{{route('testemunhos.destroy',$testemunho)}}" role="form"
                                    class="d-inline"
                                    onsubmit="return confirm('Tem a certeza que quer eliminar a testemunhos?');">
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
            <h6>Não existem testemunhos registados</h6>
            @endif
        </div>
    </div>
</div>


@endsection
