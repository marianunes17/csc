@extends("layout.master")

@section("title", "Eventos")

@section("content")

@include ('layout.partials.banner')
<div class="container">
<div class="row">
    <div class="col-lg-3">
        <div class="panel panel-default sidebar-menu with-icons">
            <div class="panel-heading">
                <h3 class="h4 panel-title">Eventos</h3>
            </div>

            <div class="panel-body">
                <ul class="nav nav-pills flex-column text-sm">
                    <li class="nav-item"><a href="#" class="nav-link active">Atividades</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Projetos</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-9">
        <div class="card text-center">
            <div class="card-header">
                Dia do pijama
            </div>

            <div class="card-body">
                <p class="card-text">With supporting text below as a natural
                    lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>

            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </div>
</div>
</div>


@endsection
