@extends ("layout.admin")

<<<<<<< HEAD
@section("title", "Parcerias")
=======
@section("title", "contactos")
>>>>>>> 856138fc2ef5d9b5acb279e249559ed798d2cf81

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
<<<<<<< HEAD
    <h1 class="h3 mb-2 text-gray-800 pl-4">Parcerias</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('csc.parcerias')}}" class="btn btn-outline-primary float-right" target="_blank">
=======
    <h1 class="h3 mb-2 text-gray-800 pl-4">contactos</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('csc.contactos')}}" class="btn btn-outline-primary float-right" target="_blank">
>>>>>>> 856138fc2ef5d9b5acb279e249559ed798d2cf81
                Pré-Visualizar
                <i class="fas fa-eye"></i>
            </a>
        </div>
        <div class="card-body">
<<<<<<< HEAD
            @if (count($parcerias))
=======
            @if (count($contactos))
>>>>>>> 856138fc2ef5d9b5acb279e249559ed798d2cf81
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Assunto</th>
                            <th>Mensagem</th>
                        </tr>
                    </thead>
                    <tbody>
<<<<<<< HEAD
                        @foreach($parcerias as $parceria)
                        <tr>
                            <td>
                                @if ($parceria->imagem)
                                <img src="{{Storage::disk('public')->url('parceria_images/').$parceria->imagem}}"
                                    class="w-50" alt="parcerias">
                                @else
                                <img src="{{asset('img/no-image.png')}}" class="img-eventos" alt="parcerias">
                                @endif
=======
                        @foreach($contactos as $contacto)
                        <tr>
                            <td>{{$contacto->assunto}}</td>
                            <td>{{$contacto->mensagem}}</td>


>>>>>>> 856138fc2ef5d9b5acb279e249559ed798d2cf81
                            </td>

                            <td>{{$parceria->titulo}}</td>
                            <td>{{$parceria->descricao}}</td>


                            </td>
                            <td nowrap>
<<<<<<< HEAD
                                <a href="{{route('parcerias.show',$parceria)}}"
=======
                                <a href="{{route('contactos.show',$contacto)}}"
>>>>>>> 856138fc2ef5d9b5acb279e249559ed798d2cf81
                                    class="btn btn-sm btn-link text-decoration-none d-inline">
                                    <i class="fas fa-eye fa-xs text-primary" style="font-size: 15px;"></i>
                                </a>

<<<<<<< HEAD
                                <a href="{{route('parcerias.edit',$parceria)}}"
=======
                                <a href="{{route('contactos.edit',$contacto)}}"
>>>>>>> 856138fc2ef5d9b5acb279e249559ed798d2cf81
                                    class="btn btn-sm btn-link d-inline text-decoration-none">
                                    <i class="fas fa-pen fa-xs text-warning" style="font-size: 15px;"></i>
                                </a>

<<<<<<< HEAD
                                <form method="POST" action="{{route('parcerias.destroy',$parceria)}}" role="form"
                                    class="d-inline"
                                    onsubmit="return confirm('Tem a certeza que quer eliminar a parceria?');">
=======
                                <form method="POST" action="{{route('contactos.destroy',$contacto)}}" role="form"
                                    class="d-inline"
                                    onsubmit="return confirm('Tem a certeza que quer eliminar a contacto?');">
>>>>>>> 856138fc2ef5d9b5acb279e249559ed798d2cf81
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
<<<<<<< HEAD
            <h6>Não existem parcerias registadas</h6>
=======
            <h6>Não existem contactos registadas</h6>
>>>>>>> 856138fc2ef5d9b5acb279e249559ed798d2cf81
            @endif
        </div>
    </div>
</div>


@endsection
