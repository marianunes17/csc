<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <a href="{{route('csc.index')}}" target="_blank">
        <li class="text-center"><img
                src="{{asset('img/logos/logo-simbolo2.png')}}" alt="Centro
                Social de
                Carnide logo" class="w-75"></li>
        <h6 class="text-white text-center">Centro Social de Carnide</h6>
    </a>
    <li class="nav-item">


        <hr class="sidebar-divider">

        <a class="nav-link" href="{{route('dashboard')}}">

            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <hr class="menu-dividir">
        <a class="nav-link" href="#">
            <i class="fas fa-coins"></i>
            <span>Cotas</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <hr class="menu-dividir">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown"
            role="button" data-toggle="dropdown"
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
        <hr class="menu-dividir">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown"
            role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-handshake"></i>
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
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown"
            role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-file-invoice"></i>
            <span>Eventos</span>
        </a>

        <div id="collapseEventos" class="dropdown-menu"
            aria-labelledby="pagesDropdown">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header pl-3">Eventos:</h6>
                <a class="dropdown-item" href="{{route('eventos.index')}}">Lista
                    de eventos</a>
                <a class="dropdown-item" href="{{route('eventos.create')}}">Adicionar
                    evento</a>

                <div class="dropdown-divider"></div>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header pl-3">Categories:</h6>
                <a class="dropdown-item" href="{{route('categories.index')}}">Lista
                    de
                    Categorias</a>
                <a class="dropdown-item" href="{{route('categories.create')}}">Adicionar
                    Categoria</a>
            </div>
        </div>
    </li>


    <li class="nav-item dropdown">
        <hr class="menu-dividir">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown"
            role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-file-invoice"></i>
            <span>Formulários</span>
        </a>
        <div id="collapseForm" class="dropdown-menu"
            aria-labelledby="pagesDropdown">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header pl-3">Formulário de contactos</h6>
                <a class="dropdown-item" href="{{route('formulariocontactos.index')}}">Lista
                    de eventos</a>
                <a class="dropdown-item" href="{{route('formulariotestemunhos.inde')}}">Adicionar
                    evento</a>
            </div>
        </div>
    </li>
</ul>
