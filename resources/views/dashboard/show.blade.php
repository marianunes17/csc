@extends('layout.admin')

@section("title", "Dashboard")

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-3 text-gray-800 pl-4">Dashboard</h1>
    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-users"></i>
                    </div>
                    <div class="mr-5">{{$total_users}} Utilizadores</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('users.index')}}">
                    <span class="float-left">Ver Mais</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">{{$total_testimonials}} Testemunhos</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('testemunhos.index')}}">
                    <span class="float-left">Ver Mais</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-handshake"></i>
                    </div>
                    <div class="mr-5">{{$total_partnerships}} Parcerias</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('parcerias.index')}}">
                    <span class="float-left">Ver Mais</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-calendar-alt"></i>
                    </div>
                    <div class="mr-5">{{$total_events}} Eventos</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('eventos.index')}}">
                    <span class="float-left">Ver Mais</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Tabela Documentos</div>
        <div class="card-body">
            @if (count($documentos))
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>Tipo</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($documentos as $documento)
                        <tr>
                            <td>
                                <a href="{{Storage::disk('public')->url('documento_files/').$documento->file}}"
                                    class="img-documentos" target="_blank" alt="img documentos">Ver ficheiro</a>

                            </td>

                            <td>{{$documento->nome}}</td>
                            <td>{{$documento->descricao}}</td>
                            <td>{{$documento->tipo->nome}}</td>
                            <td>{{$documento->data}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
