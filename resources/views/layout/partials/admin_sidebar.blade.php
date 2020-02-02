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
                <h6 class="collapse-header pl-3">Documentos</h6>
                <a class="dropdown-item" href="{{route('documentos.create')}}">Adicionar
                    Documento </a>
                <a class="dropdown-item" href="{{route('documentos.index')}}">Lista
                    de Documentos</a>

                <div class="dropdown-divider"></div>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header pl-3">Anos dos Documentos</h6>
                <a class="dropdown-item" href="{{route('tipos.create')}}">Adicionar Anos</a>
                <a class="dropdown-item" href="{{route('tipos.index')}}">Lista
                    de
                    Anos</a>
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
             <a class="dropdown-item" href="{{route('users.create')}}">Adicionar Utilizador</a>
             <a class="dropdown-item" href="{{route('users.index')}}">Lista de Utilizadores</a>


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
             <a class="dropdown-item" href="{{route('equipas.create')}}">Adicionar
                Equipa</a>
             <a class="dropdown-item" href="{{route('equipas.index')}}">Lista
                de Equipa</a>


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
             <a class="dropdown-item" href="{{route('equipasdirecao.create')}}">Adicionar
                 Direção</a>
            <a class="dropdown-item" href="{{route('equipasdirecao.index')}}">Lista
                de Direção</a>


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
             <a class="dropdown-item" href="{{route('parcerias.create')}}">Adicionar
                Parcerias</a>
            <a class="dropdown-item" href="{{route('parcerias.index')}}">Lista
                de Parcerias</a>


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
                <h6 class="collapse-header pl-3">Eventos</h6>
                <a class="dropdown-item" href="{{route('eventos.create')}}">Adicionar
                    Evento</a>
                <a class="dropdown-item" href="{{route('eventos.index')}}">Lista
                    de Eventos</a>


                <div class="dropdown-divider"></div>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header pl-3">Categorias dos Eventos</h6>
                <a class="dropdown-item" href="{{route('categorias.create')}}">Adicionar
                    Categoria</a>
                <a class="dropdown-item" href="{{route('categorias.index')}}">Lista
                    de
                    Categorias</a>

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
