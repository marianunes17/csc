@extends("layout.master")

@section("title", "Eventos")

@section("content")

@include ('layout.partials.banner')

<link rel="stylesheet" href="{{route('css/eventos.css')}}">
<!--<link rel="stylesheet" href="{{route('css/eventos.css')}}">-->
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="panel panel-default sidebar-menu with-icons">
                <div class="panel-heading">
                    <h3 class="h4 panel-title">Categorias</h3>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills flex-column text-sm">
                        <li class="nav-item"><a href="#" class="nav-link
                                active">Atividades</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Projetos</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="card ">
                <div class="card-header text-center">
                        PICNIC NO PARQUE
                </div>

                <div class="card-body">
                    <p class="card-text">
                            Hoje reunimos crianças e graúdos e fizemos um picnic no parque.
                        </p>

                    <p class="card-text">
                        Juntámos o ar puro da natureza com muita comida saudável, imensas atividades e muita diversão
                    </p>



                    <!--Imagens-->
                    <div class="row">
                        <!-- Imagem 1 -->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!--Modal: Name-->
                            <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">

                                    <!--Content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p> asdhfgntjl,dewkmrfnasdhfgntjl,dewkmrfnjdmjdm </p>
                                            <button type="button" class="btn btn-outline-primary
                                                btn-rounded btn-md ml-4" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body mb-0 p-0">

                                            <div class="embed-responsive">
                                                <img class="img-fluid z-depth-1"
                                                    src="img/atividade1_1.jpg"
                                                    alt="video"
                                                    data-toggle="modal" data-target="#modal1">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--Modal: Name-->

                            <a><img class="img-fluid z-depth-1"
                                    src="img/atividade1_1.jpg"
                                    alt="video"
                                    data-toggle="modal" data-target="#modal1"></a>

                        </div>

                        <!--Imagem 2-->
                        <div class="col-lg-4 col-md-12 mb-4">
                            <!--Modal: Name-->
                            <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">

                                    <!--Content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p> asdhfgntjl,dewkmrfnjdm </p>
                                            <button type="button" class="btn btn-outline-primary
                                            btn-rounded btn-md ml-4" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <!--Body-->
                                        <div class="modal-body mb-0 p-0">

                                            <div class="embed-responsive">
                                                <img class="img-fluid z-depth-1"
                                                    src="img/atividade1_2.jpg"
                                                    alt="video"
                                                    data-toggle="modal" data-target="#modal1">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--Modal: Name-->
                            <a><img class="img-fluid z-depth-1"
                                    src="img/atividade1_2.jpg"
                                    alt="video"
                                    data-toggle="modal" data-target="#modal1"></a>
                        </div>


                         <!--Imagem 2-->
                         <div class="col-lg-4 col-md-12 mb-4">

                                <!--Modal: Name-->
                                <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">

                                        <!--Content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p> asdhfgntjl,dewkmrfnjdm </p>
                                                <button type="button" class="btn btn-outline-primary
                                                btn-rounded btn-md ml-4" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <!--Body-->
                                            <div class="modal-body mb-0 p-0">

                                                <div class="embed-responsive">
                                                    <img class="img-fluid z-depth-1"
                                                        src="img/atividade1_3.jpg"
                                                        alt="video"
                                                        data-toggle="modal" data-target="#modal1">
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--Modal: Name-->

                                <a><img class="img-fluid z-depth-1"
                                        src="img/atividade1_3.jpg"
                                        alt="video"
                                        data-toggle="modal" data-target="#modal1"></a>

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <!-- Imagem 3 -->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!--Modal: Name-->
                            <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">

                                    <!--Content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p> asdhfgntjl,dewkmrfnasdhfgntjl,dewkmrfnjdmjdm </p>
                                            <button type="button" class="btn btn-outline-primary
                                                btn-rounded btn-md ml-4" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <!--Body-->
                                        <div class="modal-body mb-0 p-0">

                                            <div class="embed-responsive">
                                                <img class="img-fluid z-depth-1"
                                                    src="img/atividade1_4.jpg"
                                                    alt="video"
                                                    data-toggle="modal" data-target="#modal1">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--Modal: Name-->

                            <a><img class="img-fluid z-depth-1"
                                    src="img/atividade1_4.jpg"
                                    alt="video"
                                    data-toggle="modal" data-target="#modal1"></a>

                        </div>

                        <!--Imagem 4-->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!--Modal: Name-->
                            <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">

                                    <!--Content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p> asdhfgntjl,dewkmrfnjdm </p>
                                            <button type="button" class="btn btn-outline-primary
                                            btn-rounded btn-md ml-4" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <!--Body-->
                                        <div class="modal-body mb-0 p-0">

                                            <div class="embed-responsive">
                                                <img class="img-fluid z-depth-1"
                                                    src="img/atividade1_5.jpg"
                                                    alt="video"
                                                    data-toggle="modal" data-target="#modal1">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--Modal: Name-->

                            <a><img class="img-fluid z-depth-1"
                                    src="img/atividade1_5.jpg"
                                    alt="video"
                                    data-toggle="modal" data-target="#modal1"></a>

                        </div>

                            <!--Imagem 6-->
                            <div class="col-lg-4 col-md-12 mb-4">
                                <!--Modal: Name-->
                                <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">

                                        <!--Content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <p> asdhfgntjl,dewkmrfnjdm </p>
                                                <button type="button" class="btn btn-outline-primary
                                                btn-rounded btn-md ml-4" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!--Body-->
                                            <div class="modal-body mb-0 p-0">

                                                <div class="embed-responsive">
                                                    <img class="img-fluid z-depth-1"
                                                        src="img/atividade1_6.jpg"
                                                        alt="video"
                                                        data-toggle="modal" data-target="#modal1">
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--Modal: Name-->
                                <a><img class="img-fluid z-depth-1"
                                        src="img/atividade1_6.jpg"
                                        alt="video"
                                        data-toggle="modal" data-target="#modal1"></a>
                        </div>
                    </div>
                <div class="card-footer text-muted">
                    30 agosto
                </div>
            </div>
        </div>
    </div>
</div>









@endsection
