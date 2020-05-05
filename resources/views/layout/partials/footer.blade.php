<!-- FOOTER -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h4 class="h6">Páginas</h4>
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('csc.index')}}" title="inicio" class="nav-item">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" title="csc" class="nav-item">O Centro</a>
                        <ul class="">
                            <li class="nav-item">
                                <a href="{{route('csc.historia')}}" title="historia">História</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('csc.equipa')}}" title="equipa"> Equipa</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('csc.parcerias')}}" title="parcerias">Parcerias</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('csc.servicos')}}" title="servicos" class="nav-item">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('csc.eventos')}}" title="eventos" class="nav-item">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('csc.contactos')}}" title="contactos" class="nav-item">Contactos</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <hr class="d-block d-lg-none mt-4">
                <h4 class="h6">Contactos</h4>
                <p class="text-uppercase"><strong>Morada</strong><br>Travessa da Fonte, n.º 4 <br>Carnide - Pombal<br>
                    Portugal
                    <br><br><strong>Telefone</strong><br> 236 946 189 <br>96 841 58 77</p><a
                    href="{{route('csc.contactos')}}" class="btn btn-template-main">Contacte-nos</a>

            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <hr class="d-block d-lg-none mt-4">
                <h4 class="h6">Redes Sociais | E-mail</h4>
                <ul class="list-unstyled social">
                    <li class="list-inline-item"><a
                            href="https://www.facebook.com/Centro-Social-de-Carnide-188111744658661/" target="_blank"><i
                                class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="mailto:cscarnide@gmail.com"><i
                                    class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center-md">
                    <p>Copyright &copy; by Centro Social de Carnide, 2020</p>
                </div>
            </div>
        </div>
</footer>


<!-- Javascript files-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('vendor/waypoints/lib/jquery.waypoints.min.js')}}"> </script>
<script src="{{asset('vendor/jquery.counterup/jquery.counterup.min.js')}}"> </script>
<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
<script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('vendor/jquery.scrollto/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('js/front.js')}}"></script>
