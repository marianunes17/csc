@extends ("layout.admin")

@section("title", "Utilizadores")

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 pl-4">Utilizadores</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            @can("create",App\User::class)
            
            <a class="btn btn-primary" href="{{route('users.create')}}">
                <i class="fas fa-plus"></i> Adicionar Utilizador
            </a>
           @else
                <span class="btn btn-secondary disabled" style=" opacity: 0;">
                </span>
            @endcan
        </div>
        <div class="card-body">
            @if (count($users))
            <div class="row">
                <div class="col-md-2" style="border:1px solid #dee2e6;">
                    <form method="GET" action="{{route('users.index')}}" class="form-group">
                        <div class="form-group">
                            <label for="inputName">Nome</label>
                            <input type="text" class="form-control" name="name" id="inputName" value="{{request()->get('name')}}" />
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="text" class="form-control" name="email" id="inputEmail"
                                placeholder="Email address" value="{{request()->get('email')}}" />
                        </div>
                        <label for="inputRole">Tipo de Utilizador</label>
                        <select name="role" id="inputRole" class="form-control">
                            <option value="">All</option>
                            <option {{(request()->get('role')=='Administrador')?"selected":""}} value="Administrador">Admin</option>
                            <option {{(request()->get('role')=='Normal')?"selected":""}} value="Normal">Normal</option>
                        </select>

                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Search</button>
                        </div>

                    </form>
                </div>
                <div class="col-md-10" style="border:1px solid #dee2e6;">

            
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
                                @can("update",$user)

                                <a href="{{route('users.edit',$user)}}"
                                    class="btn btn-sm btn-link d-inline text-decoration-none">
                                    <i class="fas fa-pen fa-xs text-warning" style="font-size: 15px;"></i>
                                </a>
                                @else
                                <span class="btn btn-xs btn-secondary btn-p disabled">
                                    <i class="fas fa-pen fa-xs"></i>
                                </span>
                                @endcan
                                @can("delete",$user)
                                <form method="POST" action="{{route('users.destroy',$user)}}" role="form"
                                    class="d-inline"
                                    onsubmit="return confirm('Tem a certeza que quer eliminar o Utilizador?');">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-sm btn-link text-decoration-none d-inline">
                                        <i class="fas fa-trash fa-xs text-danger" style="font-size: 15px;"></i></button>
                                </form>
                                @else
                                <span class="btn btn-xs btn-secondary btn-p disabled">
                                <i class="fas fas fa-trash fa-xs"></i></span>
                                @endcan
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
