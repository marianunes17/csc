<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="text-center"><img src="{{asset('img/logos/logo-simbolo2.png')}}" alt="Centro Social de
        Carnide logo" class="w-75"></li>
    <li class="nav-item active">

      <a class="nav-link" href="index.html">

        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Eventos</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="{{route('eventos.create')}}">Adicionar Evento</a>
        <a class="dropdown-item" href="{{route('eventos.index')}}">Listar Todos</a>
      </div>
    </li>
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-users"></i>
              <span>Utilizadores</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="dropdown-item" href="#">Adicionar Utilizador</a>
              <a class="dropdown-item" href="#">Listar Utilizadores</a>
            </div>
          </li>
  </ul>
