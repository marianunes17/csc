<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <a href="{{route('csc.index')}}">
        <li class="text-center"><img src="{{asset('img/logos/logo-simbolo2.png')}}" alt="Centro Social de
            Carnide logo" class="w-75"></li>
        <h6 class="text-white text-center">Centro Social de Carnide</h6>
    </a>
    <li class="nav-item active">


        <hr class="sidebar-divider">

        <a class="nav-link" href="#">

            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item active">

        <a class="nav-link" href="#">

            <i class="fas fa-coins"></i>
            <span>Cotas</span>
        </a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-users"></i>
            <span>Utilizadores</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="#">Adicionar Utilizador</a>
            <a class="dropdown-item" href="#">Lista de Utilizadores</a>
        </div>
    </li>


    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-file-invoice"></i>
            <span>Eventos</span>
        </a>

        <div id="collapseEventos" class="dropdown-menu" aria-labelledby="pagesDropdown">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header pl-3">Eventos:</h6>
                <a class="dropdown-item" href="{{route('eventos.index')}}">Lista
                    de eventos</a>
                <a class="dropdown-item" href="{{route('eventos.create')}}">Adicionar
                    evento</a>

                <div class="dropdown-divider"></div>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header pl-3">Categories:</h6>
                <a class="dropdown-item" href="{{route('categorias.index')}}">Lista de
                    Categorias</a>
                <a class="dropdown-item" href="{{route('categorias.create')}}">Adicionar
                    Categoria</a>

                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Sub Categorias:</h6>
                <a class="dropdown-item" href="{{route('subcategorias.index')}}">Lista de
                    Sub Categorias</a>
                <a class="dropdown-item" href="{{route('subcategorias.create')}}">Adicionar
                    Sub Categoria</a>
            </div>
        </div>
    </li>

    <li class="nav-item active">

        <a class="nav-link" href="index.html">

            <i class="fas fa-comments"></i>
            <span>Formulário de testemunhos</span>
        </a>
    </li>
</ul>
