<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item">

        <a class="nav-link m-auto" href="{{route('dashboard')}}">

            <i class="fas fa-fw fa-tachometer-alt "></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item dropdown">
        <hr class="menu-dividir">
        <a class="nav-link dropdown-toggle m-auto" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-file-download fa-fw"></i>
            <span>Documentos</span>
        </a>

        <div id="collapseDocumentos" class="dropdown-menu" aria-labelledby="pagesDropdown">
            <div class=" py-2 collapse-inner rounded">
                <h6 class="collapse-header pl-3">Documentos:</h6>
                <a class="dropdown-item" href="{{route('documentos.index')}}">Lista
                    de Documentos</a>
                <a class="dropdown-item" href="{{route('documentos.create')}}">Adicionar
                    Documento</a>

                <div class="dropdown-divider"></div>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header pl-3">Tipos de Documentos</h6>
                <a class="dropdown-item" href="{{route('tipos.index')}}">Lista
                    de
                    Tipos</a>
                <a class="dropdown-item" href="{{route('tipos.create')}}">Adicionar
                    novos Tipos</a>
            </div>
        </div>
    </li>

    <li class="nav-item dropdown">
        <hr class="menu-dividir">
        <a class="nav-link dropdown-toggle m-auto" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-users fa-fw"></i>
            <span>Utilizadores</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
             <a class="dropdown-item" href="{{route('users.index')}}">Lista de Utilizadores</a>
            <a class="dropdown-item" href="{{route('users.create')}}">Adicionar Utilizador</a>

        </div>
    </li>
    <li class="nav-item dropdown">
        <hr class="menu-dividir">
        <a class="nav-link dropdown-toggle m-auto" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-people-carry fa-fw"></i>
            <span>Equipa</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
             <a class="dropdown-item" href="{{route('equipas.index')}}">Lista
                de Equipa</a>
            <a class="dropdown-item" href="{{route('equipas.create')}}">Adicionar
                Equipa</a>

        </div>
    </li>
    <li class="nav-item dropdown">
        <hr class="menu-dividir">
        <a class="nav-link dropdown-toggle m-auto" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-tie fa-fw"></i>
            <span> Direção</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{route('equipasdirecao.index')}}">Lista
                de Direção</a>
            <a class="dropdown-item" href="{{route('equipasdirecao.create')}}">Adicionar
                 Direção</a>

        </div>
    </li>
    <li class="nav-item dropdown">
        <hr class="menu-dividir">
        <a class="nav-link dropdown-toggle m-auto" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-handshake fa-fw"></i>
            <span>Parcerias</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{route('parcerias.index')}}">Lista
                de Parcerias</a>
            <a class="dropdown-item" href="{{route('parcerias.create')}}">Adicionar
                Parcerias</a>

        </div>
    </li>

    <li class="nav-item dropdown">
        <hr class="menu-dividir">
        <a class="nav-link dropdown-toggle m-auto" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-calendar-alt fa-fw"></i>
            <span>Eventos</span>
        </a>

        <div id="collapseEventos" class="dropdown-menu" aria-labelledby="pagesDropdown">
            <div class="py-2 collapse-inner rounded">
                <h6 class="collapse-header pl-3">Eventos:</h6>
                <a class="dropdown-item" href="{{route('eventos.index')}}">Lista
                    de eventos</a>
                <a class="dropdown-item" href="{{route('eventos.create')}}">Adicionar
                    evento</a>

                <div class="dropdown-divider"></div>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header pl-3">Categorias dos eventos</h6>
                <a class="dropdown-item" href="{{route('categorias.index')}}">Lista
                    de
                    Categorias</a>
                <a class="dropdown-item" href="{{route('categorias.create')}}">Adicionar
                    Categoria</a>
            </div>
        </div>
    </li>


    <li class="nav-item dropdown">
        <hr class="menu-dividir">
        <a class="nav-link dropdown-toggle m-auto" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-file-invoice fa-fw"></i>
            <span>Formulários</span>
        </a>
        <div id="collapseForm" class="dropdown-menu" aria-labelledby="pagesDropdown">
            <div class="py-2 collapse-inner rounded">
                <a class="dropdown-item" href="{{route('contactos.index')}}">Contactos</a>
                <a class="dropdown-item" href="{{route('testemunhos.index')}}">Testemunhos</a>
            </div>
        </div>
    </li>
</ul>
