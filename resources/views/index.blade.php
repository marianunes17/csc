@extends("layout.master")

<!-- nome da pasta e ponto
significa q extende a view master -->

@section("title", "Centro Social de Carnide")

@section("content")

<section style="background: url('img/centrocrs.jpg') center center repeat; background-size: cover;"
    class="bar background-white relative-positioned">
    <div class="container">
        <div class="home-carousel">
            <div class="dark-mask mask-primary"></div>
            <div class="container">
                <div class="homepage owl-carousel">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-5 text-right">
                                <h1>CENTRO DE DIA</h1>
                                <p>+ Conforto<br>+ companhia<br>+ ativades<br> Venha visitar-nos!</p>
                            </div>
                            <div class="col-md-7"><img src="img/centrodia.png" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-7 text-center"><img src="img/centrodia2.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-5">
                                <h2>LAR</h2>
                                <p>O nosso centro dá as<br> melhores codições<br> as pessoas mais necessitada!</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-5 text-right">
                                <h1>CRECHE</h1>
                                <p>O futuro das vossas crianças<br>começa aqui no CSC!</p>
                            </div>
                            <div class="col-md-7"><img src="img/creche.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bar pt-5">
    <div class="container">
        <div class="heading text-center">
            <h2>Serviços</h2>
        </div>
        <p class="lead text-center">O Centro Social de Carnide, proporciona aos nossos utentes um leque de serviços e
            atividades,
            que permite ao mesmo e aos seus familiares estarem descansados.<br>Caso queira saber mais acerca d os nossos
            serviços, clique no botão "Saber mais"!</p>

        <div class="container text-center">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="box-simple">
                        <div><img src="img/erpi.jpeg" alt="" class="img-fluid"></div>
                        <br>
                        <h4 class="h4">ERPI</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-simple">
                        <div><img src="img/centrodia.jpg" alt="" class="img-fluid"></div>
                        <br>
                        <h4 class="h4">CENTRO DE DIA</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-simple">
                        <div><img src="img/sad-01.png" alt="" class="img-fluid"></div>
                        <br>
                        <h4 class="h4">SAD</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-simple">
                        <div><img src="img/crechecrs1.jpg" alt="" class="img-fluid"></div>
                        <br>
                        <h4 class="h4">CRECHE</h4>
                    </div>
                </div>

                <div class="col-sm-12 text-center">
                    <a href="{{route('csc.servicos')}}" class="btn btn-template-outlined" style>Saber mais</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bar background-pentagon no-mb text-md-center">
    <div class="container">
        <div class="heading text-center">
            <h2>Testemunhos</h2>
        </div>
        <p class="lead">Testemunhos mais recentes dos nossos utentes, que comprovam a qualidade dos nossos serviços!</p>
        <ul class="owl-carousel testimonials list-unstyled equal-height">
            <li class="item">
                <div class="testimonial d-flex flex-wrap">
                    <div class="text">
                        <p>O Centro Social de Carnide foi um apoio enorme no que toca a criar os meus três filhos. Se
                            não fosse o mesmo, estaria a ficar careca com os problemas que eles me dão.<br>
                            O meu profundo obrigado ao CSC!</p>
                    </div>
                    <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                            <div class="title">
                                <h5>João Morgado</h5>
                                <strong>
                                    <p>29/11/2019</p>
                                </strong>
                            </div>
                            <div class="avatar"><img alt="" src="img/persona2.jpg" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item">
                <div class="testimonial d-flex flex-wrap">
                    <div class="text">
                        <p>Após ter ter pesquisado um lugar para colocar o nosso filho, encontrei em carnide o lugar
                            perfeito para satisfazer as minhas necessidades</p>
                    </div>
                    <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                            <div class="title">
                                <h5>Diogo Calisto</h5>
                                <strong>
                                    <p>29/11/2019</p>
                                </strong>
                            </div>
                            <div class="avatar"><img alt="" src="img/persona1.jpg" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item">
                <div class="testimonial d-flex flex-wrap">
                    <div class="text">
                        <p>Não tenho condiçoes nem tempo devido ao trabalho para dar a atenção necessaria aos meus pais,
                            por isso decidi inscrevê-los no Centro social de Carnide.</p>
                        <p>Hoje em dia vejo que foi a melhor decisão da minha vida! Obrigado a esta equipa incrível!</p>
                    </div>
                    <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                            <div class="title">
                                <h5>Ana Santos</h5>
                                <strong>
                                    <p>01/11/2019</p>
                                </strong>
                            </div>
                            <div class="avatar"><img alt="" src="img/person-3.png" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item">
                <div class="testimonial d-flex flex-wrap">
                    <div class="text">
                        <p>Sinto que ao colocar os meus avôs neste Centro, eles ganharam outro ânimo, pois este promove
                            atividades ludicas para os utentes.</p>
                    </div>
                    <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                        <div class="icon"><i class="fa fa-quote-left"></i></div>
                        <div class="testimonial-info d-flex">
                            <div class="title">
                                <h5>João Camões</h5>
                                <strong>
                                    <p>21/10/2019</p>
                                </strong>
                            </div>
                            <div class="avatar"><img alt="" src="img/persona4.jpg" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="bar pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading text-center">
                    <h2>Deixe aqui o seu testemunho</h2>
                </div>
            </div>
            <div class="col-md-8 mx-auto">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nome"></label>
                                <input id="nome" type="text" class="form-control" placeholder="Primeiro Nome">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="asssunto"></label>
                                <input id="assunto" type="text" class="form-control" placeholder="Sobrenome">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="email"></label>
                                <input id="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message"></label>
                                <textarea id="message" class="form-control" placeholder="Testemunho"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i>
                                Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="bar bg-gray">
    <div class="container">
        <div class="heading text-center">
            <h2>Parceiros</h2>
        </div>
        <ul class="list-unstyled owl-carousel customers no-mb">
            <li class="item"><img src="img/parceria1.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/parceria2.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/parceria3.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/parceria4.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/parceria5.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/parceria6.png" alt="" class="img-fluid"></li>
            <li class="item"><img src="img/parceria7_2.png" alt="" class="img-fluid"></li>
        </ul>
    </div>
</section>

@endsection
