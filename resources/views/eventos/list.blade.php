@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Eventos</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-primary" href="{{route('eventos.create')}}"> <!-- rota para criar a eventos-->
        <i class="fas fa-plus"></i> Adicionar Eventos
      </a>
    </div>
    <div class="card-body">
        @if (count($eventos)) <!--Se tiver eventos mostra-as-->
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Título</th>
              <th>Descrição</th>
              <th>Categoria</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($eventos as $eventos)
            <tr>
                <td>{{$eventos->nome}}</td>
                <td>{{$eventos->descricao}}</td>
                <td>{{$eventos->categoria_id}}</td>

                <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('eventos.show',$eventos)}}">
                    <i class="fas fa-eye fa-xs"></i>
                </a>

                <a class="btn btn-xs btn-warning btn-p" href="{{route('eventos.edit',$eventos)}}">
                    <i class="fas fa-pen fa-xs"></i>
                </a>

                <form method="POST" action="{{route('eventos.destroy',$eventos)}}" role="form"
                class="inline" onsubmit="return confirm('Tem a certeza que pretende eliminar?');">
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
        <h6>De momento, não há eventos </h6>  <!--Caso não tenha eventos mostra esta mensagem-->
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
