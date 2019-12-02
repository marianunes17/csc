<div class="top-bar">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-md-end
                            justify-content-between">

                    <div class="login">
                        <a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn">
                            <i class="fa fa-sign-in"></i>
                            <span class="d-none d-md-inline-block">Entrar</span>
                        </a>

                        <a href="{{route('csc.registar')}}" class="signup-btn"><i class="fa fa-user"></i>
                            <span class="d-none d-md-inline-block">Registar</span></a>
                    </div>


                    <ul class="social-custom list-inline">
                        <li class="list-inline-item"><a
                                href="https://www.facebook.com/Centro-Social-de-Carnide-188111744658661/"
                                target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <!-- <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                        <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top bar end-->
<!-- Login Modal-->
<div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true"
    class="modal fade">
    <div role="document" class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 id="login-modalLabel" class="modal-title"> Login</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="customer-orders.html" method="get">
                    <div class="form-group">
                        <input id="email_modal" type="text" placeholder="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input id="password_modal" type="password" placeholder="password" class="form-control">
                    </div>
                    <p class="text-center">
                        <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                    </p>
                </form>
                <p class="text-center text-muted">Ainda não se registou?</p>
                <p class="text-center text-muted"><a href="{{route('csc.registar')}}"><strong>Registar
                            Agora</strong></a>
                    ! É fácil e demora apenas 1 minuto.</p>
            </div>
        </div>
    </div>
</div>
<header class="nav-holder make-sticky">
    <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
        <div class="container"><a href="{{route('csc.index')}}" class="navbar-brand home">
                <img src="img/logos/logo-simbolo2.png" alt="Centro Social de
                    Carnide logo" class="d-none d-md-inline-block logo"> <span class="site-description">Centro Social
                    de
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
