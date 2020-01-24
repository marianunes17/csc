@extends ("layout.admin")

@section("title", "Equipa")

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 pl-4">Equipa</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{route('equipas.create')}}">
                <i class="fas fa-plus"></i> Adicionar Membro Equipa
            </a>
            <a href="{{route('csc.equipas')}}" class="btn btn-outline-primary float-right" target="_blank">
                Visualizar
                <i class="fas fa-eye"></i>
            </a>
        </div>
        <div class="card-body">
            @if (count($equipas))
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>Cargo</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equipas as $equipa)
                        <tr>
                            <td>
                                @if ($equipa->imagem)
                                <img src="{{Storage::disk('public')->url('equipa_images/').$equipa->imagem}}"
                                    class="w-50" alt="equipa">
                                @else
                                <img src="{{asset('img/no-image.png')}}" class="img-eventos" alt="equipa">
                                @endif
                            </td>

                            <td>{{$equipa->titulo}}</td>
                            <td>{{$equipa->cargo}}</td>
                            <td>{{$equipa->descricao}}</td>


                            </td>
                            <td nowrap>
                                <a href="{{route('equipas.show',$equipa)}}"
                                    class="btn btn-sm btn-link text-decoration-none d-inline">
                                    <i class="fas fa-eye fa-xs text-primary" style="font-size: 15px;"></i>
                                </a>

                                <a href="{{route('equipas.edit',$equipa)}}"
                                    class="btn btn-sm btn-link d-inline text-decoration-none">
                                    <i class="fas fa-pen fa-xs text-warning" style="font-size: 15px;"></i>
                                </a>

                                <form method="POST" action="{{route('equipas.destroy',$equipa)}}" role="form"
                                    class="d-inline"
                                    onsubmit="return confirm('Tem a certeza que quer eliminar o mebro de equipa?');">
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
            <h6>Não existem membros de equipas registados</h6>
            @endif
        </div>
    </div>
</div>


@endsection
