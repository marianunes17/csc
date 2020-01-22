@extends ("layout.admin")

@section("title", "Utilizadores")

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 pl-4">Utilizadores</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{route('users.create')}}">
                <i class="fas fa-plus"></i> Adicionar Utilizador
            </a>
           
        </div>
        <div class="card-body">
            @if (count($users))
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Tipo de Utilizador</th>
                            <th>Ações</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>

                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>

                            <td nowrap>
                                <a href="{{route('users.show',$user)}}"
                                    class="btn btn-sm btn-link text-decoration-none d-inline">
                                    <i class="fas fa-eye fa-xs text-primary" style="font-size: 15px;"></i>
                                </a>

                                <a href="{{route('users.edit',$user)}}"
                                    class="btn btn-sm btn-link d-inline text-decoration-none">
                                    <i class="fas fa-pen fa-xs text-warning" style="font-size: 15px;"></i>
                                </a>

                                <form method="POST" action="{{route('users.destroy',$user)}}" role="form"
                                    class="d-inline"
                                    onsubmit="return confirm('Tem a certeza que quer eliminar o Utilizador?');">
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
            <h6>Não existem utilizadores registados</h6>
            @endif
        </div>
    </div>
</div>


@endsection
