@extends ("layout.admin")

@section("title", "Categorias")

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 pl-3">Categorias</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{route('categorias.create')}}">
                <!-- rota para criar a categoria -->
                <i class="fas fa-plus"></i> Adicionar Categoria
            </a>
        </div>
        <div class="card-body">
            @if (count($categorias))
            <!--Se tiver categorias mostra-as-->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Descrição</th>
                            <th>Pai</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorias as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>
                                @if ($category->category_id)
                                {{$category->categoryParent->name}}
                                @endif
                            </td>
                            <td nowrap>
                                <a class="btn btn-sm btn-link text-decoration-none d-inline" href="{{route('categorias.show',$category)}}">
                                    <i class="fas fa-eye fa-xs text-primary" style="font-size: 15px;"></i>
                                </a>

                                <a class="btn btn-sm btn-link text-decoration-none d-inline" href="{{route('categorias.edit',$category)}}">
                                    <i class="fas fa-pen fa-xs text-warning" style="font-size: 15px;"></i>
                                </a>

                                <form method="POST" action="{{route('categorias.destroy',$category)}}" role="form"
                                    class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete this record?');">
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
            <h6>No categorias registered</h6>
            <!--Caso não tenha categorias mostra esta mensagem-->
            @endif
        </div>
    </div>
</div>
@endsection

@section("moreScripts")
<script>
    $('#dataTable').dataTable({
        destroy: true,
        "order": [[0, 'asc']],
        "columns": [
            null,
            null,
            { "orderable": false }
        ]
    });

</script>
@endsection