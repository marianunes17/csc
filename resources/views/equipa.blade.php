@extends("layout.master")

@section("title", "Equipa")

@section("content")

@include ('layout.partials.banner')

<div id="content">
    <div class="container">
        <section class="bar mb-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Conheça a nossa equipa!</h2>
                    </div>
                    <p class="lead">Contamos com uma equipa de profissionais qualificada que garante o nosso bom
                        desempenho nas áreas em que atuamos. Juntos superamos os desafios e entregamos resultados.
                        Junte-se a nós e faça parte de algo especial.</p>
                    <div class="row text-center">
                        @foreach ($equipas as $team)
                        <div class="col-md-4 col-sm-12">
                            <div data-animate="fadeInUp" class="team-member">
                                <div class="image"><a href="team-member.html">
                                    <img src="{{Storage::disk('public')->url('equipa_images/').$team->imagem}}" alt=""
                                            class="img-fluid rounded-circle"></a></div>
                                <h3><a href="team-member.html">{{$team->titulo}}</a></h3>
                                <p class="role">{{$team->cargo}}</p>
                                <div class="text">
                                    <p>{{$team->descricao}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row text-center mt-5">
                        <div class="col"></div>
                        <div class="col-md-2 col-sm-3">
                            <div data-animate="fadeInUp" class="team-member">
                                <div class="image"><a href="team-member.html"><img src="img/person-1.jpg" alt=""
                                            class="img-fluid rounded-circle"></a></div>
                                <h3><a href="team-member.html">João Gomes</a></h3>
                                <p class="role">Fundador</p>
                            </div>
                        </div>
                        <div data-animate="fadeInUp" class="col-md-2 col-sm-3">
                            <div class="team-member">
                                <div class="image"><a href="team-member.html"><img src="img/person-2.jpg" alt=""
                                            class="img-fluid rounded-circle"></a></div>
                                <h3><a href="team-member.html">David Lopes</a></h3>
                                <p class="role">CTO</p>
                            </div>
                        </div>
                        <div data-animate="fadeInUp" class="col-md-2 col-sm-3">
                            <div class="team-member">
                                <div class="image"><a href="team-member.html"><img src="img/person-3.png" alt=""
                                            class="img-fluid rounded-circle"></a></div>
                                <h3><a href="team-member.html">Patrícia Lopes</a></h3>
                                <p class="role">Tesoureira</p>
                            </div>
                        </div>
                        <div data-animate="fadeInUp" class="col-md-2 col-sm-3">
                            <div class="team-member">
                                <div class="image"><a href="team-member.html"><img src="img/person-4.jpg" alt=""
                                            class="img-fluid rounded-circle"></a></div>
                                <h3><a href="team-member.html">Ricardo Dinis</a></h3>
                                <p class="role">Marketeer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="bar bg-gray no-mb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Testemunhos</h2>
                    </div>
                    <p class="lead">Saiba porque o CSC é a opção certa para cuidar os seus.</p>
                    <!-- Carousel Start-->
                    <ul class="owl-carousel testimonials list-unstyled equal-height">
                        @foreach($testemunhos as $testemunho)
                        <li class="item">
                            <div class="testimonial d-flex flex-wrap">
                                <div class="text">
                                    <p>{{$testemunho->testemunho}}</p>
                                </div>
                                <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                                    <div class="testimonial-info d-flex">
                                        <div class="title">
                                            <h5>{{$testemunho->nome}}</h5>
                                            <p>{{$testemunho->data}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <!-- Carousel End-->
                </div>
            </div>
        </div>
    </section>
</div>
<div class="get-it">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center p-3">
                <h3>Queremos ouvir o que tem a dizer!</h3>
            </div>
            <div class="col-lg-4 text-center p-3"> <a href="{{route('csc.contactos')}}"
                    class="btn btn-template-outlined-white">
                    Vamos conversar?</a></div>
        </div>
    </div>
</div>

@endsection
