@extends ("layout.admin")

@section("title", "Sub Categorias")

@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Sub Categorias</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-primary" href="{{route('subcategorias.create')}}">
        <i class="fas fa-plus"></i> Adicionar Sub Categoria
      </a>
    </div>
    <div class="card-body">
        @if (count($subcategorias)) <!--Se tiver categorias mostra-as-->
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($subcategorias as $subcategory)
            <tr>
                <td>{{$subcategory->name}}</td>
                <td>{{$subcategory->description}}</td>

                <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('subcategorias.show',$subcategory)}}">
                    <i class="fas fa-eye fa-xs"></i>
                </a>

                <a class="btn btn-xs btn-warning btn-p" href="{{route('subcategorias.edit',$subcategory)}}">
                    <i class="fas fa-pen fa-xs"></i>
                </a>

                <form method="POST" action="{{route('subcategorias.destroy',$subcategory)}}" role="form"
                class="inline" onsubmit="return confirm('Are you sure you want to delete this record?');">
                    @csrf
                    <!--Proteção do website contra ataques de cross-site request forgery (CSRF),
                        ou seja, Contra pedidos que provêm de outros websites
                    Acrescenta 2 campos escondidos ao formulario-->

                    @method("DELETE")
                    <button type="submit" class="btn btn-xs btn-danger btn-p">
                        <i class="fas fa-trash fa-xs"></i>
                    </button>
                </form>
                </td>
            </tr>
 @endforeach
          </tbody>
        </table>
      </div>
      @else
        <h6>Não existem sub categorias</h6>  <!--Caso não tenha categorias mostra esta mensagem-->
    @endif
    </div>
  </div>
</div>
@endsection

@section("moreScripts")
<script>
  $('#dataTable').dataTable( {
  destroy: true,
    "order": [[ 0, 'asc' ]],
	"columns": [
	  null,
    null,
    { "orderable": false }
  ]
} );

</script>
@endsection