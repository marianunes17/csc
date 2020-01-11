@extends ("layout.admin")

@section("title", "Testemunhos")

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 pl-4">Testemunhos</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{route('testemunhos.create')}}">
                <i class="fas fa-plus"></i> Adicionar Testemunho
            </a>
            <a href="{{route('csc.index')}}" class="btn btn-outline-primary float-right" target="_blank">
                Pré-Visualizar
                <i class="fas fa-eye"></i>
            </a>
        </div>
        <div class="card-body">
            @if (count($testemunhos))
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Imagem</th>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testemunhos as $testemunhos)
                        <tr>
                            <td>
                                @if ($testemunhos->imagem)
                                <img src="{{Storage::disk('public')->url('testemunhos_images/').$testemunhos->imagem}}"
                                    class="w-50" alt="parcerias">
                                @else
                                <img src="{{asset('img/no-image.png')}}" class="img-eventos" alt="parcerias">
                                @endif
                            </td>

                            <td>{{$testemunhos->titulo}}</td>
                            <td>{{$testemunhos->descricao}}</td>


                            </td>
                            <td nowrap>
                                <a href="{{route('testemunhos.show',$testemunhos)}}"
                                    class="btn btn-sm btn-link text-decoration-none d-inline">
                                    <i class="fas fa-eye fa-xs text-primary" style="font-size: 15px;"></i>
                                </a>

                                <a href="{{route('testemunhos.edit',$testemunhos)}}"
                                    class="btn btn-sm btn-link d-inline text-decoration-none">
                                    <i class="fas fa-pen fa-xs text-warning" style="font-size: 15px;"></i>
                                </a>

                                <form method="POST" action="{{route('testemunhos.destroy',$testemunhos)}}" role="form"
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
            <h6>Não existem parcerias registadas</h6>
            @endif
        </div>
    </div>
</div>


@endsection
