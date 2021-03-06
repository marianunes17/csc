<nav class="navbar navbar-expand navbar-dark bg-dark static-top py-0">


    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars" style="font-size: 20px;"></i>
    </button>

    <a href="{{route('csc.index')}}" target="_blank" class="text-center text-decoration-none d-inline-block">
        <img src="{{asset('img/logo_simbolo_final.png')}}" alt="Centro Social de Carnide logo"
            style="max-width: 100px;" class="d-none d-md-inline-block">
        <span class="text-white position-relative" style="font-weight: 500;
        line-height: 1.2; font-size:1rem; left:-20px;">Centro Social de Carnide</span>
    </a>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0d-md-inline-block ">


        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="{{route('contactos.index')}}" role="button" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
            </a>
        </li>
    </ul>

    <div class="modal-footer">
        <form action="{{route('logout')}}" method="post" class="inline">
        @csrf
        <button class="btn btn-link text-muted ml-2 text-decoration-none" type="submit">
            <i class="fas fa-sign-out-alt"></i> Sair
        </button>
        </form>
    </div>

</nav>
