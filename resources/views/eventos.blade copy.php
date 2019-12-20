@extends("layout.master")

@section("title", "Eventos")

@section("content")

@include ('layout.partials.banner')


<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="panel panel-default sidebar-menu with-icons">
                <div class="panel-heading">
                    <h3 class="h4 panel-title">Categorias</h3>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills flex-column text-sm">
                        @foreach($categories as $i => $categoria)
                    <li class="nav-item"><a href="{{route('csc.eventos')}}?cat_id={{$categoria->id}}" class="nav-link categorias
                                @if ($i==0) active @endif">{{$categoria->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="card">
                <div class="card-header text-center">
                    Festa de Natal
                </div>

                <div class="card-body">
                    <p class="card-text">
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="{{route('csc.landingpage')}}" target="_blank">
                                    <img src="{{asset('img/flyer.jpg')}}" alt="flyer de natal"
                                        class="img-fluid z-depth-1">
                                </a>
                            </div>

                            <div class="col-lg-9">
                                Temos todo o gosto em convida-lo para a nossa
                                festa de
                                Natal que se realizará no dia 15 de dezembro
                                pelas 16 horas
                    </p>

                    <p class="card-text"> Venha ter connosco! </p>
                    <p class="card-text"> Reserve já o seu lugar
                        <a href="{{route('csc.landingpage')}}" target="_blank"> aqui </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted d-inline-block">
            <span class="float-left"> 05 dezembro </span>
            <span class="float-right">Atividade</span>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header text-center">
            Picnic no Parque
        </div>

        <div class="card-body">
            <p class="card-text">
                Hoje reunimos crianças e graúdos e fizemos um picnic no
                parque.
            </p>

            <p class="card-text">
                Juntámos o ar puro da natureza com muita comida
                saudável, imensas atividades e muita diversão
            </p>



            <!--Imagens-->
            <div class="row">
                <!-- Imagem 1 -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">

                        <div class="modal-dialog modal-lg" role="document">

                            <!--Content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p> Inicio dos preparativos para o
                                        pic-nic </p>
                                    <button type="button" class="btn
                                                btn-outline-primary
                                                btn-rounded btn-md ml-4" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <!--Body-->
                                <div class="modal-body mb-0 p-0">
                                    <div class="embed-responsive">
                                        <img class="img-fluid z-depth-1" src="{{asset('img/atividade1_1.jpg')}}"
                                            alt="pic-nic" data-toggle="modal" data-target="#modal1">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Modal: Name-->

                    <a>
                        <img class="img-fluid z-depth-1" src="{{asset('img/atividade1_1.jpg')}}" alt="pic-nic"
                            data-toggle="modal" data-target="#modal1">
                    </a>
                </div>

                <!--Imagem 2-->
                <div class="col-lg-4 col-md-12 mb-4">
                    <!--Modal: Name-->
                    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">

                            <!--Content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p>Convivio entre diferentes
                                        gerações</p>
                                    <button type="button" class="btn
                                                btn-outline-primary
                                                btn-rounded btn-md ml-4" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--Body-->
                                <div class="modal-body mb-0 p-0">

                                    <div class="embed-responsive">
                                        <img class="img-fluid z-depth-1" src="{{asset('img/atividade1_2.jpg')}}"
                                            alt="diferentes gerações" data-toggle="modal" data-target="#modal2">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Modal: Name-->
                    <a><img class="img-fluid z-depth-1" src="{{asset('img/atividade1_2.jpg')}}"
                            alt="diferentes gerações" data-toggle="modal" data-target="#modal2"></a>
                </div>


                <!--Imagem 3-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">

                            <!--Content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p> D. Lurdes </p>
                                    <button type="button" class="btn
                                                btn-outline-primary
                                                btn-rounded btn-md ml-4" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--Body-->
                                <div class="modal-body mb-0 p-0">
                                    <div class="embed-responsive">
                                        <img class="img-fluid z-depth-1" src="{{asset('img/atividade1_3.jpg')}}"
                                            alt="D.Lurdes" data-toggle="modal" data-target="#modal3">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="{{asset('img/atividade1_3.jpg')}}" alt="D.Lurdes"
                            data-toggle="modal" data-target="#modal3"></a>
                </div>



                <!-- Imagem 4 -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p>Pic-nic</p>
                                    <button type="button" class="btn
                                                btn-outline-primary
                                                btn-rounded btn-md ml-4" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <!--Body-->
                                <div class="modal-body mb-0 p-0">

                                    <div class="embed-responsive">
                                        <img class="img-fluid z-depth-1" src="{{asset('img/atividade1_4.jpg')}}"
                                            alt="pic-nic" data-toggle="modal" data-target="#modal4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="{{asset('img/atividade1_4.jpg')}}" alt="pic-nic"
                            data-toggle="modal" data-target="#modal4"></a>
                </div>

                <!--Imagem 5-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p> Partilha entre o Sr. José e o
                                        Rafael</p>
                                    <button type="button" class="btn
                                                btn-outline-primary
                                                btn-rounded btn-md ml-4" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--Body-->
                                <div class="modal-body mb-0 p-0">

                                    <div class="embed-responsive">
                                        <img class="img-fluid z-depth-1" src="{{asset('img/atividade1_5.jpg')}}"
                                            alt="partilha" data-toggle="modal" data-target="#modal5">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="{{asset('img/atividade1_5.jpg')}}" alt="partilha"
                            data-toggle="modal" data-target="#modal5"></a>
                </div>

                <!--Imagem 6-->
                <div class="col-lg-4 col-md-12 mb-4">
                    <!--Modal: Name-->
                    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p> A Madalena, a Leonor e o Tomás a
                                        saborearem uma deliciosa
                                        melancia </p>
                                    <button type="button" class="btn
                                                btn-outline-primary
                                                btn-rounded btn-md ml-4" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--Body-->
                                <div class="modal-body mb-0 p-0">

                                    <div class="embed-responsive">
                                        <img class="img-fluid z-depth-1" src="{{asset('img/atividade1_6.jpg')}}"
                                            alt="crianças" data-toggle="modal" data-target="#modal6">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Modal: Name-->
                    <a><img class="img-fluid z-depth-1" src="{{asset('img/atividade1_6.jpg')}}" alt="crianças"
                            data-toggle="modal" data-target="#modal6"></a>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted d-inline-block">
            <span class="float-left"> 25 novembro </span>
            <span class="float-right">Atividade</span>
        </div>
    </div>
</div>
</div>
</div>
@endsection
