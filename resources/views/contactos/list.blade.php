@extends ("layout.admin")

@section("title", "Contactos")

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 pl-4">Contactos</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('csc.contactos')}}" class="btn btn-outline-primary float-right" target="_blank">
                Visualizar
                <i class="fas fa-eye"></i>
            </a>
        </div>
        <div class="card-body">
            @if (count($contactos))
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Assunto</th>
                            <th>Mensagem</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contactos as $contacto)
                        <tr>
                            <td>{{$contacto->nome}}</td>
                            <td>{{$contacto->email}}</td>
                            <td>{{$contacto->assunto}}</td>
                            <td>{{$contacto->mensagem}}</td>
                            <td>{{$contacto->data}}</td>


                            </td>
                            <td nowrap>
                                <a href="{{route('contactos.show',$contacto)}}"
                                    class="btn btn-sm btn-link text-decoration-none d-inline" title="Visualizar Contacto">
                                    <i class="fas fa-eye fa-xs text-primary" style="font-size: 15px;"></i>
                                </a>

                                <a href="mailto:{{$contacto->Email}}"
                                    class="btn btn-sm btn-link d-inline text-decoration-none" title="Enviar Mensagem">
                                    <i class="fas fa-envelope fa-xs text-warning" style="font-size: 15px;"></i>
                                </a>

                                <form method="POST" action="{{route('contactos.destroy',$contacto)}}" role="form"
                                    class="d-inline"
                                    onsubmit="return confirm('Tem a certeza que quer eliminar o contacto?');">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-sm btn-link text-decoration-none d-inline" title="Eliminar Contacto">
                                        <i class="fas fa-trash fa-xs text-danger" style="font-size: 15px;"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <h6>Não existem contactos registados</h6>
            @endif
        </div>
    </div>
</div>


@endsection
