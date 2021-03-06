<header class="nav-holder make-sticky">
    <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
        <div class="container"><a href="{{route('csc.index')}}" class="navbar-brand home">
                <img src="img/logos/logo-simbolo2.png" alt="Centro Social de
                Carnide logo" class="d-none d-md-inline-block logo"> <span class="site-description">Centro Social de
                    Carnide</span>
            </a>
            <button type="button" data-toggle="collapse" data-target="#navigation"
                class="navbar-toggler btn-template-outlined">
                <span class="sr-only">Toggle navigation</span><i class="fa
                fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">

                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item
                    @if ($menu=='index') active @endif">
                        <a href="{{route('csc.index')}}" class="">Início
                        </a>
                    </li>

                    <li class="nav-item dropdown menu-large
                    @if ($menu=='CSC') active @endif">
                        <a href="#" data-toggle="dropdown" class="seta">O Centro
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <img src="img/template-easy-customize.png" alt="" class="img-fluid d-none
                                        d-lg-block">
                                    </div>
                                    <div class="col-lg-4 col-md-2">
                                        <h5>CSC</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item">
                                                <a href="{{route('csc.historia')}}" class="nav-link">História</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{route('csc.equipa')}}" class="nav-link">Equipa</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="{{route('csc.parcerias')}}" class="nav-link">Parcerias</a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a href="{{route('csc.documentos')}}" class="nav-link">Documentos</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item
                    @if ($menu=='Servicos') active @endif">
                        <a href="{{route('csc.servicos')}}" class="nav-link">Serviços</a>
                    </li>

                    <li class="nav-item
                    @if ($menu=='Eventos') active @endif">
                        <a href="{{route('csc.eventos')}}" class="nav-link">Eventos</a>
                    </li>

                    <li class="nav-item">
                        <a href="https://cscarnide.g7.dwm.best/" class="nav-link" target="_blank">Loja</a>
                    </li>

                    <li class="nav-item
                    @if ($menu=='Contactos') active @endif">
                        <a href="{{route('csc.contactos')}}" class="nav-link">Contactos</a>
                    </li>
                </ul>
            </div>

            <div id="search" class="collapse clearfix">
                <form role="search" class="navbar-form">
                    <div class="input-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-template-main">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
