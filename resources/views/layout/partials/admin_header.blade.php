<header class="nav-holder make-sticky">
    <div id="all">
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 d-md-block d-none">
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-md-end
                            justify-content-between">
                            
                            <div class="login">
                                <a href="#" data-toggle="modal"
                                    data-target="#login-modal"
                                    class="login-btn">
                                    <i class="fa fa-sign-in"></i>
                                    <span class="d-none d-md-inline-block">Entrar</span>
                                </a>

                                <a href="{{route('csc.registar')}}"
                                    class="signup-btn"><i class="fa fa-user"></i>
                                    <span class="d-none d-md-inline-block">Registar</span></a>
                            </div>


                            <ul class="social-custom list-inline">
                                <li class="list-inline-item"><a
                                        href="https://www.facebook.com/Centro-Social-de-Carnide-188111744658661/"
                                        target="_blank"><i
                                            class="fa fa-facebook"></i></a></li>
                                <!-- <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                                <li class="list-inline-item"><a href="#"><i
                                            class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar end-->
        <!-- Login Modal-->
        <div id="login-modal" tabindex="-1" role="dialog"
            aria-labelledby="login-modalLabel" aria-hidden="true"
            class="modal fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 id="login-modalLabel" class="modal-title"> Login</h4>
                        <button type="button" data-dismiss="modal"
                            aria-label="Close" class="close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="customer-orders.html" method="get">
                            <div class="form-group">
                                <input id="email_modal" type="text"
                                    placeholder="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input id="password_modal" type="password"
                                    placeholder="password" class="form-control">
                            </div>
                            <p class="text-center">
                                <button class="btn btn-template-outlined"><i
                                        class="fa fa-sign-in"></i> Log in</button>
                            </p>
                        </form>
                        <p class="text-center text-muted">Ainda não se registou?</p>
                        <p class="text-center text-muted"><a
                                href="{{route('csc.registar')}}"><strong>Registar
                                    Agora</strong></a>
                            ! É fácil e demora apenas 1 minuto.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
