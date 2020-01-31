@extends ("layout.admin")

@section("title", "Parcerias")

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 pl-4">Parcerias</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{route('parcerias.create')}}">
                <i class="fas fa-plus"></i> Adicionar Parceria
            </a>
            <a href="{{route('csc.parcerias')}}" class="btn btn-outline-primary float-right" target="_blank">
                Visualizar
                <i class="fas fa-eye"></i>
            </a>
        </div>
        <div class="card-body">
            @if (count($parcerias))
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
                        @foreach($parcerias as $parceria)
                        <tr>
                            <td>
                                @if ($parceria->imagem)
                                <img src="{{Storage::disk('public')->url('parceria_images/').$parceria->imagem}}"
                                    class="w-50" alt="parcerias">
                                @else
                                <img src="{{asset('img/no-image.png')}}" class="img-parcerias" alt="parcerias">
                                @endif
                            </td>

                            <td>{{$parceria->titulo}}</td>
                            <td>{{$parceria->descricao}}</td>


                            </td>
                            <td nowrap>
                                <a href="{{route('parcerias.show',$parceria)}}"
                                    class="btn btn-sm btn-link text-decoration-none d-inline">
                                    <i class="fas fa-eye fa-xs text-primary" style="font-size: 15px;"></i>
                                </a>

                                <a href="{{route('parcerias.edit',$parceria)}}"
                                    class="btn btn-sm btn-link d-inline text-decoration-none">
                                    <i class="fas fa-pen fa-xs text-warning" style="font-size: 15px;"></i>
                                </a>

                                <form method="POST" action="{{route('parcerias.destroy',$parceria)}}" role="form"
                                    class="d-inline"
                                    onsubmit="return confirm('Tem a certeza que quer eliminar a parceria?');">
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
